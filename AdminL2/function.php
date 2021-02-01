<?php

class DB_con
{
	function __construct()
	{
		$conn=mysqli_connect("localhost","root","","bus_reservation");
		$this->dbh=$conn;
		if(mysqli_connect_errno())
		{
			echo"Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}


	
	public function fetchdata()
	{
		$sql="SELECT * FROM `agent_management`";
		$run=mysqli_query($this->dbh,$sql);
		return $run;
	}
	
	public function update($id,$name,$image,$agency,$contact,$email,$subscription,$age,$wallet,$street,$city,$state)
	{
		$sql1="UPDATE `agent_management` SET `image`='$image',`name`='$name',`agency`='$agency',`contact`='$contact',`email`='$email',`subscription`='$subscription',`age`='$age',`wallet`='$wallet',`street`='$street',`city`='$city',`state`='$state' WHERE id='$id'";
		$run1=mysqli_query($this->dbh,$sql1);
		return $run1;
	}
	
	public function fetchrecord($id)
	{
		$sql2="SELECT `id`, `image`, `name`, `agency`, `contact`, `email`, `subscription`, `age`, `wallet`, `street`, `city`, `state` FROM `agent_management` WHERE id='$id'";
		$run2=mysqli_query($this->dbh,$sql2);
		return $run2;
		
	}
	public function insert4($image,$name,$agency,$contact,$subscription,$age,$wallet,$street,$city,$state)
	{
		  $sql5="INSERT INTO `agent_management`( `image`, `name`, `agency`, `contact`, `email`, `subscription`, `age`, `wallet`, `street`, `city`, `state`) VALUES ('$image','$name','$agency','$contact','$subscription','$age','$wallet','$street','$city','$state')";
		$run6=mysqli_query($this->dbh,$sql5);
		return $run6;
	}
	
	public function delete($id)
	{
		$sql3="DELETE FROM `agent_management` WHERE id='$id'";
		$run3=mysqli_query($this->dbh,$sql3);
		return $run3;
		
	}
	
	public function insert($name,$profession)
	{
		$sql4="INSERT INTO `front`(`name`,`profession`) VALUES ('$name','$profession')";
		$run4=mysqli_query($this->dbh,$sql4);
		return $run4;
	}

	public function fetchdata1()
	{
		$sql5="SELECT * FROM `user_management`";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
		
	}


	public function fetchrecord1($id)
	{
		$sql5="SELECT `id`, `image`, `name`, `agency`, `contact`, `email`, `subscription`, `age`, `wallet`, `street`, `city`, `state` FROM `user_management` WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}


	public function delete1($id)
	{
		$sql5="DELETE FROM `user_management` WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}


	//*staff section


    public function fetch_staff_data()
	{
		$sql15="SELECT * FROM `staff`";
		$run5=mysqli_query($this->dbh,$sql15);
		return $run5;
	}
	public function fetch_staff_record($id)
	{
		$sql16="SELECT `id`, `image`, `name`, `email`, `birthdate`, `contact`, `position`, `street`, `city`, `state` FROM `staff` WHERE id='$id'";
		$run6=mysqli_query($this->dbh,$sql16);
		return $run6;
		
	}



	public function delete3($id)
	{
		$sql5="DELETE FROM `staff` WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}

	public function insert3($image,$name,$email,$birthname,$contact,$position,$street,$city,$state)
	{
		  $sql5="INSERT INTO `staff`( `image`, `name`, `email`,`birthname`,`contact`, `position`, `street`, `city`, `state`) VALUES ('$image','$name','$email','$birthname','$contact','$position','$street','$city','$state')";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}






  //**offers

	public function fetchdata2()
	{
		$sql5="SELECT * FROM `offer`";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
		
	}


   public function insert2($image,$offer_name,$posted_date,$discription)
	{
		$sql5="INSERT INTO `offer`(`image`, `offer_name`, `posted_date`, `discription`) VALUES ('$image','$offer_name','$posted_date','$discription')";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}


	public function fetchrecord2($id)
	{
		$sql5="SELECT `image`, `offer_name`, `posted_date`, `discription` FROM `offer` WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}

	public function delete2($id)
	{
		$sql5="DELETE FROM `offer` WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}
// **ADMIN profile
public function fetchadmindata()
{
	$sqla1="SELECT * FROM `admin`";
	$runa1=mysqli_query($this->dbh,$sqla1);
	return $runa1;

}


// Route Management

public function fetch_route_data()
{
	$sql20="SELECT * FROM `route_management`";
	$run7= mysqli_query($this->dbh,$sql20);
	return $run7;
}
public function fetch_route_record($id)
{
	$sql21="SELECT `from`, `to`, `atime`, `dtime`, `stop`, `duration` FROM `route_management` WHERE id = '$id'";
	$run8 = mysqli_query($this->dbh,$sql21);
	return $run8;
}

public function update_route_record($id,$from,$to,$stop,$duration)
{
	$sql22="UPDATE `route_management` SET `id`='$id' `from`='$from',`to`='$to',`stop`='$stop',`duration`='$duration' WHERE id = '$id'";
	$run10=mysqli_query($this->dbh,$sql22);
	return $run10;
}

//**Bus Managment

public function fetchdata4()
{
	$sql5="SELECT * FROM `bus_management`";
	$run5=mysqli_query($this->dbh,$sql5);
	return $run5;
	
}


public function fetchrecord4($id)
{
	$sql5="SELECT `id`, `busagency`, `bus_name`, `bus_number`, `bus_type`, `total_seats`, `available_seats_`, `route`, `start_point`, `start_time`, `drop_point`, `drop_time`, `ratings` FROM `bus_management` WHERE id='$id'";
	$run5=mysqli_query($this->dbh,$sql5);
	return $run5;
}

public function delete4($id)
{
	$sql5="DELETE FROM `bus_management` WHERE id='$id'";
	$run5=mysqli_query($this->dbh,$sql5);
	return $run5;
}


/* Ticket section*/

public function fetch_ticket_data()
{
	$sql1t="SELECT * FROM `ticketbooking`";
	$run1t= mysqli_query($this->dbh,$sql1t);
	return $run1t;
}
public function delete1t($id)
	{
		$sql2t="DELETE FROM `ticketbooking` WHERE id='$id'";
		$run2t=mysqli_query($this->dbh,$sql2t);
		return $run2t;
	}
	/*public function update($id,$name,$image,$agency,$contact,$email,$subscription,$age,$wallet,$street,$city,$state)
	{
		$sql1="UPDATE `offer` SET `image`='$image',`offer_name`=,`posted_date`=[value-4],`discription`=[value-5] WHERE id='$id'";
		$run1=mysqli_query($this->dbh,$sql1);
		return $run1;
	}




	/*public function insert1($image,$para1,$para2)
	{
		$sql5="INSERT INTO `aboutme`(`image`,`para1`,`para2`) VALUES ('$image','$para1','$para2')";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}
	
	
	
	
	
	public function update1($id,$image,$para1,$para2)
	{
		$sql5="UPDATE `aboutme` SET `image`='$image',`para1`='$para1',`para2`='$para2' WHERE id='$id'";
		$run5=mysqli_query($this->dbh,$sql5);
		return $run5;
	}
	
	public function fetchdata2()
	{
		$sql6="SELECT * FROM `myprojects`";
		$run6=mysqli_query($this->dbh,$sql6);
		return $run6;
		
	}
	public function insert2($icon,$count,$workdone)
	{
		$sql6="INSERT INTO `myprojects`(`icon`, `count`, `workdone`) VALUES ('$icon','$count','$workdone')";
		$run6=mysqli_query($this->dbh,$sql6);
		return $run6;
	}
	
	public function fetchrecord2($id)
	{
		$sql6="SELECT `id`, `icon`, `count`, `workdone` FROM `myprojects` WHERE id='$id'";
		$run6=mysqli_query($this->dbh,$sql6);
		return $run6;
	}
	
	public function delete2($id)
	{
		$sql6="DELETE FROM `myprojects` WHERE id='$id'";
		$run6=mysqli_query($this->dbh,$sql6);
		return $run6;
	}
	
	public function update2($id,$icon,$count,$workdone)
	{
		$sql6="UPDATE `myprojects` SET `icon`='$icon',`count`='$count',`workdone`='$workdone' WHERE id='$id'";
		$run6=mysqli_query($this->dbh,$sql6);
		return $run6;
	}
	
    public function fetchdata3()
	{
		$sql7="SELECT * FROM `service`";
		$run7=mysqli_query($this->dbh,$sql7);
		return $run7;
	}
	
	public function insert3($service,$abservice)
	{
		$sql7="INSERT INTO `service`(`service`, `abservice`) VALUES ('$service','$abservice')";
		$run7=mysqli_query($this->dbh,$sql7);
		return $run7;
	}
	
	public function fetchrecord3($id)
	{
		$sql7="SELECT `service`, `abservice` FROM `service` WHERE id='$id'";
		$run7=mysqli_query($this->dbh,$sql7);
		return $run7;
	}
	
	public function delete3($id)
	{
		$sql7="DELETE FROM `service` WHERE id='$id'";
		$run7=mysqli_query($this->dbh,$sql7);
		return $run7;
	}
	
	public function update3($id,$service,$abservice)
	{
		$sql7="UPDATE `service` SET `service`='$service',`abservice`='$abservice' WHERE id='$id'";
		$run7=mysqli_query($this->dbh,$sql7);
		return $run7;
	}
	 public function fetchdata4()
	 {
		 $sql8="SELECT * FROM `contact`";
		 $run8=mysqli_query($this->dbh,$sql8);
		 return $run8;
	 }
	
	public function insert4($address,$email,$mobile)
	 {
		 $sql8="INSERT INTO `contact`(`address`, `email`, `mobile`) VALUES ('$address','$email','$mobile')";
		 $run8=mysqli_query($this->dbh,$sql8);
		 return $run8;
	 }
	
	public function fetchrecord4($id)
	 {
		 $sql8="SELECT `address`, `email`, `mobile` FROM `contact` WHERE id='$id'";
		 $run8=mysqli_query($this->dbh,$sql8);
		 return $run8;
	 }
	
	public function delete4($id)
	 {
		 $sql8="DELETE FROM `contact` WHERE id='$id'";
		 $run8=mysqli_query($this->dbh,$sql8);
		 return $run8;
	 }
	public function update4($id,$address,$email,$mobile)
	 {
		 $sql8="UPDATE `contact` SET `address`='$address',`email`='$email',`mobile`='$mobile' WHERE id='$id'";
		 $run8=mysqli_query($this->dbh,$sql8);
		 return $run8;
	 }
	public function fetchdata5()
	 {
		 $sql9="SELECT * FROM `massage`";
		 $run9=mysqli_query($this->dbh,$sql9);
		 return $run9;
	 }*/
	
}


?> 

 