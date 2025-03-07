<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Major extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->database();
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->model('Usermodel');
	}

	// public registration

	public function register()
	{
		$pass = $this->input->post('password');
		$newpassword = $this->Usermodel->hash_password($pass);

		$data = array(
			'name' => $this->input->post('name'),
			'contact' => $this->input->post('contact')
		);

		$da = array(
			'email' => $this->input->post('email'),
			'password' => $newpassword,
			'utype' => '0',
			'status' => '1'
		);

		$result = $this->Usermodel->register1($data, $da);
		if ($result) {
			echo "<script>alert('Registration successful')</script>";
			redirect('Major/reg1', 'refresh');
		} else {
			echo "<script>alert('Registration Unsuccessful')</script>";
			redirect('Major/reg1', 'refresh');
		}
	}
	public function reg1()
	{
		$this->load->view('subheader');
		$this->load->view('publicregistration');
		$this->load->view('footer');
	}

	// admin userview

	public function tableview()
	{
		$d['data'] = $this->Usermodel->display();
		$this->load->view('tableview', $d);
	}

	// movie registration

	public function movieregister()
	{
		if (isset($_FILES['image'])) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			$config['max_size'] = 1000;
			$config['max_width'] = 1024;
			$config['max_height'] = 768;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')) {
				$error = $this->upload->display_errors();
				$agreement = $this->input->post('image');
			} else {
				$data = $this->upload->data();
				$agreement = $data['file_name'];
			}

		}
		// echo $agreement;exit;
		$d = $this->input->post('hide');
		$id = $this->session->userid;
		$data = array(

			'movieid' => $d,
			'loginid' => $id,
			'moviename' => $this->input->post('name'),
			'category' => $this->input->post('category'),
			'language' => $this->input->post('language'),
			'duration' => $this->input->post('duration'),
			'from' => $this->input->post('from'),
			'to' => $this->input->post('to'),
			'image' => $agreement,
			'cast' => $this->input->post('cast'),
			'directorname' => $this->input->post('dname'),
			'year' => $this->input->post('year'),
			'releasedate' => $this->input->post('date'),
			'description' => $this->input->post('description'),
			'amount' => $this->input->post('amount')
		);
		$result = $this->Usermodel->movieregister1($data, $id);
		if ($result) {
			echo "<script>alert('Registration successful')</script>";
			redirect('Major/moviereg', 'refresh');
		} else {
			echo "<script>alert('Registration Unsuccessful')</script>";
			redirect('Major/moviereg', 'refresh');
		}
	}

	public function moviereg()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '1') 
		{
		$this->load->view('theatersearchheader');
		$this->load->view('movieregistration');
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}

	//  admin movie view edit,delete

	public function movieview()
	{
		$d['data'] = $this->Usermodel->movietable();
		$this->load->view('movietableview', $d);
	}

	// user movie view

	public function moviedataview()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$this->load->view('userheader');
		$d['data'] = $this->Usermodel->moviedisplay();
		$this->load->view('movieview', $d);
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}

	// user movie details view	

	// public function moviedetailsview()
	// {
	// 	// $data['id']=$this->uri->segment(3);
	// 	$id=$this->uri->segment(3);
	// 	$data['disp']=$this->Usermodel->moviedetails($id);
	// 	$this->load->view('moviedetailviews',$data);
	// }


	public function user()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$data['data'] = $this->Usermodel->moviedisplay();
		$this->load->view('user', $data);
		}
		else
	{
				  redirect('Major/login','refresh');
 
	}
	}


	public function admin()
	{
		$this->load->view('admin');
	}


	public function login()
	{
		$this->load->view('logins');
	}

	// user movie search

	public function searchmovies()
	{
		$search = $this->input->post('search');
		// echo $search;exit;
		$data['data'] = $this->Usermodel->moviesearch($search);
		// print_r($data);exit;
		if (empty($data['data'])) {
			$data['searchmsg'] = 'no result found';
		}
		$this->load->view('moviesearch', $data);
	}

	// user movie details view	

	public function details()
	{
		$id = $this->uri->segment(3);
		$data['data'] = $this->Usermodel->movdetails($id);
		$this->load->view('moviedetails', $data);
	}


	public function login1()
	{
		$this->load->helper('security');
		$id = $this->input->post('email');
		$id1 = $this->input->post('password');
		if ($this->Usermodel->checklogin($id, $id1)) {
			$id2 = $this->Usermodel->getuserid($id);
			$alldetail = $this->Usermodel->getuserdetail($id2);
			$this->session->set_userdata(
				array(
					'userid' => $id2,
					'logined' => (bool) true,
					'utype' => $alldetail->utype,
					'status' => $alldetail->status
				)
			);
			if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true) and ($_SESSION['utype'] === '0')
				and ($_SESSION['status'] === '1')
			) {
				redirect('Major/user', 'refresh');

			} else if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true) and ($_SESSION['utype'] === '1')
				and ($_SESSION['status'] === '1')
			) {
				redirect('Major/theater1', 'refresh');
			} else if (
				isset($_SESSION['logined']) and ($_SESSION['logined'] === true) and ($_SESSION['utype'] === '2')
				and ($_SESSION['status'] === '1')
			) {
				redirect('Major/admin', 'refresh');
			} else {
				echo "<script>alert('Waiting for admin approval')</script>";
				redirect('Major/login', 'refresh');
			}
		} else {
			echo "<script>alert('email or password incorrect')</script>";
			redirect('Major/login', 'refresh');
		}
	}


	public function logout()
	{
	
		{
			$data = new stdClass();
			  if (isset($_SESSION['logined']) && $_SESSION['logined'] === true) {
				foreach ($_SESSION as $key => $value) {
				  unset($_SESSION[$key]);
				}
				$this->session->set_flashdata('logout_notification', 'logged_out');
				redirect('Major/login', 'refresh');  
		  } else {
				redirect('Major/index'); 
				 
			  }
			}
		}

	// user profile view

	// public function userdataview()
	// {
	// 	$id=$this->session->userid;
	// 	$d['data']=$this->Usermodel->userdetails($id);
	// 	$this->load->view('userview',$d);


	// }
	public function useredit()
	{
		$this->load->view('userheader');
		//$id['id']=$this->session->userid;
		$id = $this->session->userid;
		$data['disp'] = $this->Usermodel->uedit($id);
		$this->load->view('userediting', $data);
		$this->load->view('footer');
	}
	public function userupdate()
	{

		$id = $this->session->userid;
		//$id=$this->input->post('hide');
		//$id['id']=$this->uri->segment(3);
		$data = array(
			'name' => $this->input->post('name'),
			'contact' => $this->input->post('contact'),
			'loginid' => $id
		);
		$da = array('email' => $this->input->post('email'));

		$result = $this->Usermodel->uupdate($data, $id);
		$result1 = $this->Usermodel->uupdate1($da, $id);
		if ($result && $result1) {
			echo "<script>alert('Updated Successfully')</script>";
			redirect('major/useredit', 'refresh');
		} else {
			echo "<script>alert('Updation Unsuccessful')</script>";
			redirect('major/useredit', 'refresh');
		}
	}
	// public function theaterdataview()
// 	{
// 		$id=$this->session->userid;
// 		$d['data']=$this->Usermodel->theaterdetails($id);
// 		$this->load->view('theaterprofile1',$d);


	// 	}
	public function theateredit()
	{
		$this->load->view('theatersearchheader');
		//$id['id']=$this->session->userid;
		$id = $this->session->userid;
		$data['disp'] = $this->Usermodel->tedit($id);
		$this->load->view('theaterprofile', $data);
		$this->load->view('footer');
	}

	public function theaterupdate()
	{

		$id = $this->session->userid;
		//$id=$this->input->post('hide');
		//$id['id']=$this->uri->segment(3);
		$data = array(
			'theatername' => $this->input->post('theatername'),
			'category' => $this->input->post('category'),
			'city' => $this->input->post('city'),
			'seats' => $this->input->post('seats'),
			'contact' => $this->input->post('contact'),
			'loginid' => $id
		);
		$da = array('email' => $this->input->post('email'));

		$result = $this->Usermodel->tupdate($data, $id);
		$result1 = $this->Usermodel->tupdate1($da, $id);
		if ($result && $result1) {
			echo "<script>alert('Updated Successfully')</script>";
			redirect('major/theateredit', 'refresh');
		} else {
			echo "<script>alert('Updation Unsuccessful')</script>";
			redirect('major/theateredit', 'refresh');
		}
		// public function userreview()
		// {
		// 	$d['data']=$this->Usermodel->review();
		// 	$this->load->view('review',$d);
		// }
	}
	public function usereview()
	{
		$this->load->view('userheader');
		$d['dis'] = $this->uri->segment(3);
		$this->load->view('review', $d);
		$this->load->view('footer');

	}
	public function userreview()
	{
		$d = $this->input->post('hide');
		$id = $this->session->userid;
		$date = date('Y-m-d');
		$data = array(
			'movieid' => $d,
			'loginid' => $id,
			'currentdate' => $date,
			'review' => $this->input->post('review')
		);
		$result = $this->Usermodel->ureview($data, $id);
		if ($result) {
			echo "<script>alert('Review added successful')</script>";
			redirect("Major/user", 'refresh');
		} else {
			echo "<script>alert('Review added Unsuccessful')</script>";
			redirect("Major/user", 'refresh');
		}
	}
	public function reviewview()
	{
		$this->load->view('adminheader');
		$id = $this->uri->segment(3);
		$d['data'] = $this->Usermodel->reviewdetails($id);
		$this->load->view('reviewview', $d);
		$this->load->view('adminfooter');
	}
	public function reviewviews()
	{
		$this->load->view('userheader');
		$id1 = $this->session->userid;
		$id = $this->uri->segment(3);
		$d['data'] = $this->Usermodel->rrview($id1);
		$this->load->view('rview', $d);
		$this->load->view('footer');
	}
	public function reviewedit($id)
	{
		$this->load->view('userheader');
		$data['id'] = $this->uri->segment(3);
		$data['disp'] = $this->Usermodel->userreviewedit($id);
		$this->load->view('reviewediting', $data);
		$this->load->view('footer');
	}
	public function reviewupdate()
	{
		$id = $this->input->post('hide');
		$data = array(
			'review' => $this->input->post('review'),
			//'utype'=>'1'
		);
		$result = $this->Usermodel->userreviewupdate($data, $id);
		if ($result) {
			echo "<script>alert('Data Updated Successfully')</script>";
			redirect('major/reviewviews', 'refresh');
		} else {
			echo "<script>alert('Data Updation Unsuccessful')</script>";
			redirect('major/reviewviews', 'refresh');
		}
	}
	public function reviewdelete()
	{
		$id = $this->uri->segment(3);
		$res = $this->Usermodel->userreviewdelete($id);
		if ($res) {
			echo "<script> alert('Deletion Success')</script>";
			redirect('major/reviewviews', 'refresh');
		} else {
			echo "<script> alert('Deletion Unsuccess')</script>";
			redirect('major/reviewviews', 'refresh');
		}
	}

	public function viewreviews()
	{
		$this->load->view('userheader');
		$id = $this->uri->segment(3);
		$d['data'] = $this->Usermodel->viewreview($id);
		$this->load->view('viewreviews', $d);
		$this->load->view('footer');
	}

	// theater registration

	public function tregister()
	{
		$pass = $this->input->post('password');
		$newpassword = $this->Usermodel->hash_password($pass);

		$data = array(
			'theatername' => $this->input->post('theatername'),
			'category' => $this->input->post('category'),
			'city' => $this->input->post('city'),
			'seats' => $this->input->post('seats'),
			'contact' => $this->input->post('contact'),

		);

		$da = array(
			'email' => $this->input->post('email'),
			'password' => $newpassword,
			'utype' => '1'

		);

		$result = $this->Usermodel->treg($data, $da);
		if ($result) {
			echo "<script>alert('Registration successful')</script>";
			redirect('Major/reg2', 'refresh');
		} else {
			echo "<script>alert('Registration Unsuccessful')</script>";
			redirect('Major/reg2', 'refresh');
		}
	}
	public function reg2()
	{
		$this->load->view('subheader');
		$this->load->view('theaterregistration');
		$this->load->view('footer');
	}

	// admin theater view

	public function theaterview()
	{
		
		//$this->load->view('adminheader');
		$d['data'] = $this->Usermodel->tview();
		$this->load->view('adminapprove', $d);
	}
	public function theater1()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '1') 
		{
		$data['data'] = $this->Usermodel->moviedisplay();
		$this->load->view('theater',$data);
		}	
		else
	{
				  redirect('Major/login','refresh');
 
	}
	}
	public function approve()
	{
		$id = $this->uri->segment(3);
		$d = array('status' => '1');
		$result = $this->Usermodel->adminapprove($id, $d);
		if ($result) {
			echo "<script>alert('approved successful')</script>";
			redirect('Major/theaterview', 'refresh');
		} else {

			echo "<script>alert('approved unsuccessful')</script>";
			redirect('Major/theaterview', 'refresh');
		}
	}

	public function reject()
	{
		$id = $this->uri->segment(3);
		$d = array('status' => '2');
		$result = $this->Usermodel->adminreject($id, $d);
		if ($result) {
			echo "<script>alert('rejected successful')</script>";
			redirect('Major/theaterview', 'refresh');
		} else {

			echo "<script>alert('rejected unsuccessful')</script>";
			redirect('Major/theaterview', 'refresh');

		}
	}

	// index view

	public function index()
	{
		$this->load->view('index');
	}

	// theater,city search	

	public function viewtheater()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$this->load->view('userheader');
		$search = $this->input->post('search');
		$d['data'] = $this->Usermodel->theater1view($search);
		// echo $search;exit;
		if (empty($d['data'])) {
			$d['search_message'] = 'No results found for the given search term.';
		}
		// print_r($d);exit;
		$this->load->view('theaterview', $d);
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}


	// public function theatersearch()
	// {

	// 	// echo $search;exit;
	// 	$data['data'] = $this->Usermodel->tsearch($search);
	// 	// print_r($data);exit;
	// 	if(empty($data['data']))
	// 	{
	// 		$data['searchtheater']='no result found';
	// 	}
	// 	$this->load->view('theatersearch',$data);
	// }

	// theater movie view

	public function tmovieview()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '1') 
		{
		$this->load->view('theatersearchheader');
		$id1 = $this->session->userid;
		$d['data'] = $this->Usermodel->tmovie($id1);
		$this->load->view('tmovieview', $d);
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}
	public function moviedelete()
	{
		$id = $this->uri->segment(3);
		$res = $this->Usermodel->tmoviedelete($id);
		if ($res) {
			echo "<script>alert('Deletion Success')</script>";
			redirect('major/tmovieview', 'refresh');
		} else {
			echo "<script>alert('Deletion Unsuccess')</script>";
			redirect('major/tmovieview', 'refresh');
		}
	}
	public function movieedit()
	{
		$this->load->view('theatersearchheader');
		$data['id'] = $this->uri->segment(3);
		$id = $this->uri->segment(3);
		$data['disp'] = $this->Usermodel->tmovieedit($id);
		$this->load->view('movieediting', $data);
		$this->load->view('footer');
	}
	public function movieupdate()
	{
		$id = $this->input->post('hide');
		$data = array(
			'moviename' => $this->input->post('moviename'),
			'category' => $this->input->post('category'),
			'language' => $this->input->post('language'),
			'duration' => $this->input->post('duration'),
			'from' => $this->input->post('from'),
			'to' => $this->input->post('to'),
			'image' => $this->input->post('image'),
			'cast' => $this->input->post('cast'),
			'directorname' => $this->input->post('directorname'),
			'year' => $this->input->post('year'),
			'releasedate' => $this->input->post('releasedate'),
			'description' => $this->input->post('description')

		);
		$result = $this->Usermodel->tmovieupdate($data, $id);
		if ($result) {
			echo "<script>alert('Data Updated Successfully')</script>";
			redirect('major/tmovieview', 'refresh');
		} else {
			echo "<script>alert('Data Updation Unsuccessful')</script>";
			redirect('major/tmovieview', 'refresh');
		}
	}
	public function moviesearchview()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$this->load->view('userheader');
		$date = date('Y-m-d');
		//$id1=$this->uri->segment(3);
		$id1 = $this->uri->segment(3);
		$d['tid'] = $this->uri->segment(3);
		$d['data'] = $this->Usermodel->umoviesearchview($id1, $date);
		//print_r($d);exit;
		$this->load->view('moviesearchview', $d);
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}
	// 	public function theaterprofile()
	// {
	// 	$id=$this->session->userid;
	// 	$d['data']=$this->Usermodel->tproview($id);
	// 	$this->load->view('theaterprofile',$d);
	// }

	public function index1()
	{
		$this->load->view('index1.php');
	}
	// 		public function seat()
// 	{
// 	   $this->load->view('seat.php');  
// }
	public function seatsite()
	{
 ini_set('display_errors', 0); 

		$tid = $this->uri->segment(3);
		$movieid = $this->uri->segment(4);
		$id['tid'] = $this->uri->segment(3);
		$id['movieid'] = $this->uri->segment(4);
		$seats = $this->Usermodel->seats($tid,$movieid);
		// if($seats != null){
		$seat1=explode(',',$seats);
		 $id['seat']=$seat1[0];
		 $id['seat1']=$seat1[1];
		// }else{
		// 	$id['seat']=null;
		// $id['seat1']=null;
		$this->load->view('seatsite', $id);
		// }
	}
	public function seat_book()
	{
		$tid = $this->input->post('tid');
		$movieid = $this->input->post('movieid');
		$loginid = $this->session->userid;
		$date=date("Y-m-d");
		$amount = $this->Usermodel->seatamount($tid,$movieid);
		$no=$this->input->post('noseats');
		$tamount=$amount*$no;
		$data = array(
			'numberofseats' => $this->input->post('noseats'),
			'seatnumbers' => $this->input->post('seatnumbers'),
			'tid' => $tid,
			'movieid' => $movieid,
			'currentdate'=>$date,
			'amount'=>$tamount,
			'loginid'=>$loginid

		);
		// print_r($data);exit;
		$result = $this->Usermodel->seat_book($data);
		if ($result) {
			echo "<script>alert('Redirecting to Payment.....')</script>";
			redirect('Major/payment/'.$tamount.'/'.$tid.'/'.$no.'/'.$result, 'refresh');
		} else {
			echo "<script>alert('Booking Unsuccessful')</script>";
			redirect('Major/viewtheater', 'refresh');
		}
	}
	public function seatview()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$this->load->view('userheader');
		$id = $this->session->userid;
		$d['data'] = $this->Usermodel->seat1($id);
		$this->load->view('seatview', $d);
		$this->load->view('footer');
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}
	public function payment()
	{
		$data['amount']=$this->uri->segment(3);
		$data['tid']=$this->uri->segment(4);
		$data['no'] = $this->uri->segment(5);
		$data['seatid'] = $this->uri->segment(6);
		$this->load->view('payment',$data);
	}
	public function paytable()
	{
		$loginid = $this->session->userid;
		$date = date('Y-m-d');
		$amount = $this->input->post('amount');
		$tid = $this->input->post('tid');
		$no = $this->input->post('noofseat');
		$seat_id = $this->input->post('seatid');
		$cardno = $this->input->post('cardnumber');
		$cvv =  $this->input->post('cvv');
		$convience_fee = 10; //convenience fee is fixed for now.
		$net_conviencefee = $convience_fee * $no;
		$total = $amount + $net_conviencefee;
		$total_amount = $this->Usermodel->gettotalamount($cardno,$cvv);
		$balance_amount = $total_amount - $total;
		$contactno_theater = $this->Usermodel->getcontactno($tid);
		$total_amount_theater = $this->Usermodel->gettotalamounttheater($contactno_theater);
		$remaining_amount_theater= $total_amount_theater + $amount;
		$acnumber = 8976445677;
		$total_amount_admin = $this->Usermodel->admin_totalamount($acnumber);
		$update_admin_amount =  $total_amount_admin + $net_conviencefee;
		$data = array(
			'nameoncard' => $this->input->post('nameoncard'),
			'cardnumber' =>$cardno ,
			'cvv' =>$cvv,
			'expirydate' => $this->input->post('expirydate'),
			'amount' => $amount,
			'currentdate' => $date,
			'loginid' => $loginid,
		);
		$data2 = array('totalamount'=>$balance_amount);
		$data3  = array('totalamount'=>$remaining_amount_theater);
		$data4 = array('totalamount'=>$update_admin_amount);
		$result = $this->Usermodel->paytable1($data);
		$result1 = $this->Usermodel->updatebankvbalance($cardno,$cvv,$data2);
		$result2 = $this->Usermodel->updatebankbalance_theater( $contactno_theater,$data3);
		$result4 = $this->Usermodel->admin_convenicefee_add($acnumber,$data4);
		if ($result && $result2 && $result1) {
			echo "<script>alert('payment Successfully')</script>";
			redirect('Major/ticketgen/'.$seat_id, 'refresh');

		} else {
			echo "<script>alert('payment Unsuccessful')</script>";
			redirect('major/', 'refresh');
		}
	}
	public function usermovie01()
	{
		if (isset($_SESSION['logined']) && $_SESSION['logined'] === true && $_SESSION['utype'] === '0') 
		{
		$this->load->view('userheader');
		$d['data'] = $this->Usermodel->pic();
		$this->load->view('usermovie01.php', $d);
	}
	else
	{
				  redirect('Major/login','refresh');
 
	}
	}
	public function addticketamount()
	{
		$loginid = $this->session->userid;
		$movieid = $this->input->post('hide');
		$date = date('Y-m-d');
		$data = array(
			'movieid' => $movieid,
			'loginid' => $loginid,
			'seatcategory' => $this->input->post('seatcategory'),
			'seatamount' => $this->input->post('seatamount'),
			'currentdate' => $date
		);


		$result = $this->Usermodel->addticket($data);
		if ($result) {
			echo "<script>alert('Submit Successfully')</script>";
			redirect('Major/tmovieview', 'refresh');
		} else {
			echo "<script>alert('Submit Unsuccessful')</script>";
			redirect('Major/tmovieview', 'refresh');
		}
	}
	public function addticketamount1()
	{
		$id['movieid'] = $this->uri->segment(3);
		$this->load->view('theatersearchheader');
		$this->load->view('addticketamount', $id);
		$this->load->view('footer');
	}
	public function rating()
	{
		$this->load->view('userheader');
		$data['movieid']=$this->uri->segment(3);
		$this->load->view('rating',$data);
		$this->load->view('footer');

	}
	public function addrating()
	{
		$loginid = $this->session->userid;
		$movieid = $this->input->post('hide');
		$date = date('Y-m-d');
		$time=date('H:i:S');
		$data = array(
			'rating' => $this->input->post('rating'),
			'movieid' => $movieid,
			'loginid' => $loginid,
			'currentdate' => $date,
			'time' => $time,

		);
		$result = $this->Usermodel->rating1($data);
		if ($result) {
			echo "<script>alert('Submit Successfully')</script>";
			redirect('Major/usermovie01', 'refresh');
		} else {
			echo "<script>alert('Submit Unsuccessful')</script>";
			redirect('Major/usermovie01', 'refresh');
		}
	}
	public function ratingview()
	{
		$this->load->view('adminheader');
        $id = $this->uri->segment(3);
		$d['data'] = $this->Usermodel->ratingdetails($id);
		$this->load->view('ratingview', $d);
		$this->load->view('adminfooter');
	}
	public function notification()
	{
		$this->load->view('adminheader');
		$this->load->view('notification');
		$this->load->view('adminfooter');
	}
	public function notification1()
	{
		
		$date = date('Y-m-d');
		$time=date('H:i:S');
		$data = array(
			'notification' => $this->input->post('notification'),
			'currentdate' => $date,
			'time' => $time,

		);
		$result = $this->Usermodel->notification2($data);
		if ($result) {
			echo "<script>alert('Submit Successfully')</script>";
			redirect('Major/adminviewnotification', 'refresh');
		} else {
			echo "<script>alert('Submit Unsuccessful')</script>";
			redirect('Major/adminviewnotification', 'refresh');
		}
	}
	public function theaternotification()
	{
		$this->load->view('theatersearchheader');
		$id['data'] = $this->Usermodel->notification3();
		$this->load->view('theaternotification',$id);
		$this->load->view('footer');
	}
	public function adminviewnotification()
	{
		$id['data'] = $this->Usermodel->notification4();
		$this->load->view('adminviewnotification',$id);
	}
	public function notiedit($id)
	{
		$this->load->view('adminheader');
		$data['id'] = $this->uri->segment(3);
		$data['disp'] = $this->Usermodel->notificationedit($id);
		$this->load->view('notiedit', $data);
		$this->load->view('adminfooter');
	}
	public function notificationupdate()
	{
		$id = $this->input->post('hide');
		$data = array(
			'notification' => $this->input->post('notification'),
			
		);
		$result = $this->Usermodel->notificationupdate($data, $id);
		if ($result) {
			echo "<script>alert('Data Updated Successfully')</script>";
			redirect('major/adminviewnotification', 'refresh');
		} else {
			echo "<script>alert('Data Updation Unsuccessful')</script>";
			redirect('major/adminviewnotification', 'refresh');
		}
	}
	public function notidelete()
	{
		$id = $this->uri->segment(3);
		$res = $this->Usermodel->notificationdelete($id);
		if ($res) {
			echo "<script> alert('Deletion Success')</script>";
			redirect('major/adminviewnotification', 'refresh');
		} else {
			echo "<script> alert('Deletion Unsuccess')</script>";
			redirect('major/adminviewnotification', 'refresh');
		}
	}
	public function ticketgen()
	{
		$this->load->view('userheader');
		$id = $this->uri->segment(3);
		$data['dis'] = $this->Usermodel->displayedcard($id);
		$this->load->view('ticketgen', $data);
		$this->load->view('footer');
	}
	public function issueticket()
	{

		if (!empty($_POST['submit'])) {
			// echo "hii";exit;
			$fullname = $this->input->post('mname');
			$fulladdress = $this->input->post('date');
			$state = $this->input->post('state');
			$district = $this->input->post('district');
			$gender = $this->input->post('gender');
			$dob = $this->input->post('noofseat');
			$aadhar_no = $this->input->post('seatno');
			$contact_no = $this->input->post('tname');
			$pincode = $this->input->post('pincode');
			$category = $this->input->post('category');
			$surname = $this->input->post('surname');
			$photo = base_url() . 'newcard/photo1.png';
			// echo $photo;exit;
			$id = time();


			//echo $photo;exit;
			$save = 'newcard/images/' . str_replace(" ", "_", $fullname . $contact_no) . '.jpg';
			$_SESSION['card'] = $save;
			$bgpic = imagecreatefrompng("newcard/tic4.png");
			$textcolor = imagecolorallocate($bgpic, 0, 0, 0); // Red color allocation
			$infcolor = imagecolorallocate($bgpic, 0, 0, 0); // Red color allocation
			$stscolor = imagecolorallocate($bgpic, 0, 0, 0);
			$ttscolor = imagecolorallocate($bgpic, 0, 0, 0); // Red color allocation
			$ifscolor = imagecolorallocate($bgpic, 0, 0, 0);
			$font = "newcard/fonts/Arial.ttf";
			$f2 = "newcard/fonts/sm.ttf";
			$f3 = "newcard/fonts/sign.ttf";
			$f4 = "newcard/fonts/avro.ttf";

			// imagettftext($bgpic, 15, 0, 540, 235, $infcolor, $f4, $id);
			imagettftext($bgpic, 30, 0, 190, 145, $infcolor, $f4, 'Moviename : '.$fullname);
			imagettftext($bgpic, 25, 0, 210, 250, $infcolor, $f4, 'Seat no : '.$aadhar_no);
			// imagettftext($bgpic, 15, 0, 190, 275, $infcolor, $f4, 'Male');
			imagettftext($bgpic, 25, 0, 230, 295, $infcolor, $f4,'Admit No :' .$dob);
			imagettftext($bgpic, 25, 0, 190, 200, $infcolor, $f4, 'Theater : '.$contact_no);
			imagettftext($bgpic, 25, 0, 250, 350, $infcolor, $f4, 'Date : '.$fulladdress);
			// imagettftext($bgpic,15, 0,5,290,$ttscolor,$f4,$photo);
//  imagettftext($bgpic,15, 0,540,210,$infcolor,$f4,$photo);
			imagettftext($bgpic, 15, 0, 230, 400, $infcolor, $f4, 'www.cineconnect.com');

			// imagettftext($bgpic, 15, 0, 170, 550, $infcolor, $f4, 'NB : Once Ticket Amount is paid not  refundable');

			// if (trim($photo != "")) {
			// 	$imgi = getimagesize($photo);
			// 	// echo $imgi;exit;
			// 	if ($imgi[0] > 0) {
			// 		if ($imgi[2] == 1) {
			// 			$av = imagecreatefromgif($photo);
			// 			imagecopyresized($bgpic, $av, 525, 85, 0, 0, 115, 115, $imgi[0], $imgi[1]);
			// 		} else if ($imgi[2] == 2) {
			// 			$av = imagecreatefromjpeg($photo);
			// 			imagecopyresized($bgpic, $av, 525, 85, 0, 0, 115, 115, $imgi[0], $imgi[1]);
			// 		} else if ($imgi[2] == 3) {
			// 			$av = imagecreatefrompng($photo);
			// 			imagecopyresized($bgpic, $av, 525, 85, 0, 0, 115, 115, $imgi[0], $imgi[1]);
			// 		}

			// 	}
			// }


			imagepng($bgpic, $save);
			imagedestroy($bgpic);
			//header("Location: ".$save);
			redirect($save, 'refresh');
		}
	}

	}







