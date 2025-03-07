<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    public function register1($data, $da)
    {
        $this->db->insert("login", $da);
        $loginid = $this->db->insert_id();
        $data['loginid'] = $loginid;
        return $this->db->insert('public', $data);
    }
    public function display()
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('login', 'login.loginid=public.loginid');
        $query = $this->db->get();
        return $query->result();
    }
    public function movieregister1($data)
    {
        return $this->db->insert('movieregister', $data);
    }
    public function movietable()
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $query = $this->db->get();
        return $query->result();
    }
    public function tmoviedelete($id)
    {
        $this->db->where('movieid', $id);
        return $query = $this->db->delete('movieregister');
    }
    public function tmovieedit($id)
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function tmovieupdate($data, $id)
    {
        $this->db->where('movieid', $id);
        return $this->db->update('movieregister', $data);
    }
    public function moviedisplay()
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->order_by('movieid', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function moviedetails($id)
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function moviesearch($search)
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        if (!empty($search)) {
            // echo "hii";exit;
            $this->db->where('moviename', $search);
            $this->db->or_where('cast', $search);
            $this->db->or_where('directorname', $search);
            $query = $this->db->get();
            return $query->result();
        }

    }
    public function movdetails($id)
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
    public function checklogin($id, $id1)
    {
        $this->db->select('password');
        $this->db->from('login');
        $this->db->where('email', $id);
        $tablepass = $this->db->get()->row('password');
        return $this->verifypassword($id1, $tablepass);
    }
    public function verifypassword($id1, $tablepass)
    {
        return password_verify($id1, $tablepass);
    }
    public function getuserid($id)
    {
        $this->db->select('loginid');
        $this->db->from('login');
        $this->db->where('email', $id);
        return $this->db->get()->row('loginid');
    }
    public function getuserdetail($id2)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('loginid', $id2);
        return $this->db->get()->row();
    }
    public function userdetails($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('login', 'login.loginid=public.loginid');
        $this->db->where('public.loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function uedit($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('login', 'login.loginid=public.loginid');
        $this->db->where('public.loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function uupdate($data, $id)
    {
        $this->db->where('loginid', $id);
        //  echo $id;exit; 
        return $this->db->update('public', $data);

    }
    public function uupdate1($da, $id)
    {
        $this->db->where('loginid', $id);
        return $this->db->update('login', $da);

    }
    public function theaterdetails($id)
    {
        $this->db->select('*');
        $this->db->from('theaterreg');
        $this->db->join('login', 'login.loginid=theatererg.loginid');
        $this->db->where('theaterreg.loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function tedit($id)
    {
        $this->db->select('*');
        $this->db->from('theaterreg');
        $this->db->join('login', 'login.loginid=theaterreg.loginid');
        $this->db->where('theaterreg.loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function tupdate($data, $id)
    {
        $this->db->where('loginid', $id);
        //  echo $id;exit; 
        return $this->db->update('theaterreg', $data);

    }
    public function tupdate1($da, $id)
    {
        $this->db->where('loginid', $id);
        return $this->db->update('login', $da);

    }
    public function ureview($data)
    {
        return $this->db->insert('review', $data);

    }

    public function reviewdetails($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('review', 'review.loginid=public.loginid');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function rrview($id1)
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('movieregister', 'movieregister.movieid=review.movieid');
        $this->db->where('review.loginid', $id1);
        $query = $this->db->get();
        return $query->result();
    }
    public function userreviewedit($id)
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->where('rid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function userreviewupdate($data, $id)
    {
        $this->db->where('rid', $id);
        return $this->db->update('review', $data);
    }
    public function userreviewdelete($id)
    {
        $this->db->where('rid', $id);
        return $query = $this->db->delete('review');
    }
    public function viewreview($id)
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function treg($data, $da)
    {
        $this->db->insert("login", $da);
        $login = $this->db->insert_id();
        $data['loginid'] = $login;
        return $this->db->insert('theaterreg', $data);
    }

    public function tview()
    {
        $this->db->select('*');
        $this->db->from('theaterreg');
        $this->db->join('login', 'login.loginid=theaterreg.loginid', 'inner');
        $query = $this->db->get();
        return $query->result();
    }
    public function adminapprove($id, $d)
    {
        $this->db->where("loginid", $id);
        return $this->db->update('login', $d);
    }
    public function adminreject($id, $d)
    {
        $this->db->where("loginid", $id);
        return $this->db->update('login', $d);

    }
    public function theater1view($search)
    {
        $this->db->select('*');
        $this->db->from('theaterreg');
        $this->db->where("theatername", $search);
        $this->db->or_where("city", $search);
        $query = $this->db->get();
        return $query->result();
    }
    public function tsearch($search)
    {
        $this->db->select('*');
        $this->db->from('theaterreg');
        if (!empty($search)) {
            // echo "hii";exit;
            $this->db->where('theatername', $search);
            $this->db->or_where('city', $search);
            $query = $this->db->get();
            return $query->result();
        }
    }
    public function tmovie($id1)
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->where('loginid', $id1);
        $query = $this->db->get();
        return $query->result();
    }
    public function umoviesearchview($id1, $date)
    {
        $currentDate = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('movieregister');
        $this->db->where('loginid', $id1);
        $this->db->where('to >=', $currentDate);
        $query = $this->db->get();

        return $query->result();
    }
    public function tproview($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('login', 'login.loginid=public.loginid');
        $this->db->where('loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function seat($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('login', 'login.loginid=public.loginid');
        $this->db->where('loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function seat1($id)
    {
        $this->db->select('*');
        $this->db->from('seat');
        $this->db->join('public', 'public.loginid=seat.loginid', 'inner');
        $this->db->join('movieregister', 'movieregister.movieid=seat.movieid', 'inner');
        $this->db->join('theaterreg', 'theaterreg.loginid=movieregister.loginid', 'inner');
        $this->db->where('seat.loginid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function paytable1($data)
    {
        return $this->db->insert('payment', $data);
    }

    public function gettotalamount($cardno,$cvv)
    {
        $this->db->select('totalamount');
        $this->db->from('bank');
        $this->db->where('cardnumber', $cardno);
        $this->db->where('cvv', $cvv);
        return $query = $this->db->get()->row('totalamount');
    }
    public function getcontactno($tid)
    {
        $this->db->select('contact');
        $this->db->from('theaterreg');
        $this->db->where('loginid', $tid);
        return $query = $this->db->get()->row('contact');
    }
    public  function gettotalamounttheater($contactno_theater)
    {
        $this->db->select('totalamount');
        $this->db->from('bank');
        $this->db->where('contact', $contactno_theater);
        return $query = $this->db->get()->row('totalamount');
    }

    public function updatebankvbalance($cardno,$cvv,$data2)
    {
        $this->db->where('cardnumber', $cardno);
        $this->db->where('cvv', $cvv);
        return $this->db->update('bank',$data2);
    }
    public  function updatebankbalance_theater( $contactno_theater,$data3)
    {
        $this->db->where('contact', $contactno_theater);
        return $this->db->update('bank',$data3);
    }
    public function admin_totalamount($acnumber)
    {
        $this->db->select('totalamount');
        $this->db->from('bank');
        $this->db->where('acnumber', $acnumber);
        return $query = $this->db->get()->row('totalamount');
    }
    public function admin_convenicefee_add($acnumber,$data4)
    {
        $this->db->where('acnumber', $acnumber);
        return $this->db->update('bank',$data4);
    }
    public function pic()
    {
        $this->db->select('*');
        $this->db->from('movieregister');
        $query = $this->db->get();
        return $query->result();
    }
    public function addticket($data)
    {
        return $this->db->insert('theater_seatamount', $data);
    }
    public function rating1($data)
    {
        return $this->db->insert('rating',$data);
    }
    public function ratingdetails($id)
    {
        $this->db->select('*');
        $this->db->from('public');
        $this->db->join('rating', 'rating.loginid=public.loginid');
        $this->db->where('movieid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function seat_book($data)
    {
         $this->db->insert('seat',$data);
         return $this->db->insert_id();
    }
    public function seatamount($tid,$id)
    {
        $this->db->select('seatamount');
        $this->db->from('theater_seatamount');
        $this->db->where('movieid', $id);
        $this->db->where('loginid', $tid);
        return $query = $this->db->get()->row('seatamount');
    }
    public function seats($tid,$id)
    {
        $this->db->select('seatnumbers');
        $this->db->from('seat');
        $this->db->where('movieid', $id);
        $this->db->where('tid', $tid);
        return $query = $this->db->get()->row('seatnumbers');
    }
    public function notification2($data)
    {
        return $this->db->insert('notification',$data);
    }
    public function notification3()
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->order_by('noid', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function notification4()
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->order_by('noid', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function notificationedit($id)
    {
        $this->db->select('*');
        $this->db->from('notification');
        $this->db->where('noid', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function notificationupdate($data, $id)
    {
        $this->db->where('noid', $id);
        return $this->db->update('notification', $data);
    }
    public function notificationdelete($id)
    {
        $this->db->where('noid', $id);
        return $query = $this->db->delete('notification');
    }

    public function displayedcard($id)
    {
        $this->db->select('*');
        $this->db->from('seat');
        $this->db->join('public', 'public.loginid=seat.loginid', 'inner');
        $this->db->join('movieregister', 'movieregister.movieid=seat.movieid', 'inner');
        $this->db->join('theaterreg', 'theaterreg.loginid=movieregister.loginid', 'inner');
        $this->db->where('seatid', $id);
        $query = $this->db->get();
        return $query->result();
    }
}

?>