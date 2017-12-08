<?php
	session_start();

	if(!isset($_SESSION['is_ot'])
    	&& 
    	!isset($_SESSION['is_of'])
    	&&
    	!isset($_SESSION['is_ad'])
    	&&
    	!isset($_SESSION['is_fd']) 
    	&&
    	!isset($_SESSION['is_am'])
    	&&
    	!isset($_SESSION['is_boss'])
    	&& 
    	!isset($_SESSION['is_admin'])){

    	header("Location: ../index.php");
    }

	require '../static/db.class.php';
    $conn = connect();

    $idno_group = $_GET['no_group'];

    $no_group = $_POST['no_group'];
    $no_community = $_POST['no_community'];


    foreach($_POST['tourist_status'] as $row1=>$art1){
 
        $tourist_status = $_POST['tourist_status'][$row1];
    }

    $tourist = $_POST['tourist'];
    $leader_giude = $_POST['leader_giude'];

    foreach($_POST['giude_status'] as $row2=>$art2){
 
        $giude_status = $_POST['giude_status'][$row2];
    }

    foreach($_POST['charter'] as $row3=>$art3){
 
        $charter = $_POST['charter'][$row3];
    }

    $agent_tour = $_POST['agent_tour'];
    $datein = $_POST['datein'];
    $dateout = $_POST['dateout'];
    $no_flight_in = $_POST['no_flight_in'];
    $no_flight_out = $_POST['no_flight_out'];
    $group_type = $_POST['group_type'];
    $append = $_POST['append'];
    $name_thai = $_POST['name_thai'];
    $name_china = $_POST['name_china'];

    foreach($_POST['hotel_status'] as $row4=>$art4){
 
        $hotel_status = $_POST['hotel_status'][$row4];
    }

    $kbcomment = $_POST['kbcomment'];
    $hotel_1 = $_POST['hotel_1'];
    $hotel_2 = $_POST['hotel_2'];
    $hotel_4 = $_POST['hotel_4'];
    $hotel_3 = $_POST['hotel_3'];

    $oldEdit = "UPDATE report_shopping SET
                    no_group='$no_group',
                    no_community='$no_community',
                    tourist_status='$tourist_status',
                    tourist='$tourist',
                    leader_giude='$leader_giude',
                    giude_status='$giude_status',
                    charter='$charter',
                    agent_tour='$agent_tour',
                    datein='$datein',
                    no_flight_in='$no_flight_in',
                    dateout='$dateout',
                    no_flight_out='$no_flight_out',
                    group_type='$group_type',
                    append='$append',
                    name_thai='$name_thai',
                    name_china='$name_china',
                    hotel_status='$hotel_status',
                    kbcomment='$kbcomment',
                    hotel_1='$hotel_1',
                    hotel_2='$hotel_2',
                    hotel_4='$hotel_4',
                    hotel_3='$hotel_3'
                WHERE no_group='$idno_group'
               ";
    $oldQry = mysqli_query($conn, $oldEdit);
    if($oldQry){
        header("Location: ../index.php");
    }else{
        echo "ERROR : ".mysql_error($conn);
    }