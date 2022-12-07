<?php

function begin($title)
{
    // session_start();
    // if (!isset($_SESSION['id'])) {
    //     echo '<script>window.location.href = "../index.php";</script>';
    // }

    echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>'.$title.'</title>
        <link rel="icon" href="yolkassets/upload/'.app1('favicon').'" type="image/png">
    
        <link rel="stylesheet" href="back/css/bootstrap1.min.css" />
    
        <link rel="stylesheet" href="back/vendors/themefy_icon/themify-icons.css" />
    
        <link rel="stylesheet" href="back/vendors/swiper_slider/css/swiper.min.css" />
    
        <link rel="stylesheet" href="back/vendors/select2/css/select2.min.css" />
    
        <link rel="stylesheet" href="back/vendors/niceselect/css/nice-select.css" />
    
        <link rel="stylesheet" href="back/vendors/owl_carousel/css/owl.carousel.css" />
    
        <link rel="stylesheet" href="back/vendors/gijgo/gijgo.min.css" />
    
        <link rel="stylesheet" href="back/vendors/font_awesome/css/all.min.css" />
        <link rel="stylesheet" href="back/vendors/tagsinput/tagsinput.css" />
    
        <link rel="stylesheet" href="back/vendors/datatable/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" href="back/vendors/datatable/css/responsive.dataTables.min.css" />
        <link rel="stylesheet" href="back/vendors/datatable/css/buttons.dataTables.min.css" />
    
        <link rel="stylesheet" href="back/vendors/text_editor/summernote-bs4.css" />
    
        <link rel="stylesheet" href="back/vendors/morris/morris.css">
    
        <link rel="stylesheet" href="back/vendors/material_icon/material-icons.css" />
    
        <link rel="stylesheet" href="back/css/metisMenu.css">

        <link rel="stylesheet" href="back/../assets/css/sweetalert2.min.css">
    
        <link rel="stylesheet" href="back/css/style1.css" />
        <link rel="stylesheet" href="back/css/colors/default.css" id="colorSkinCSS">
        '.Yolk::uicore('cssa').'
    </head>';
}
// Staff Sidebar

 function staffsidebar()
 {
     echo '<nav class="sidebar">
     <div class="logo d-flex justify-content-between">
         <a href="manager"><img src="yolkassets/upload/'.app1('applogo').'" alt=""></a>
         <div class="sidebar_close_icon d-lg-none">
             <i class="ti-close"></i>
         </div>
     </div>
     <ul id="sidebar_menu">
         
         <li>
             <a class="" href="manager" aria-expanded="false">

                 <img src="back/img/menu-icon/1.svg" alt="">
                 <span>Dashboard</span>
             </a>

        <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="back/img/menu-icon/2.svg" alt="">
                 <span>Status</span>
             </a>
             <ul>
                 <li><a href="addstatus">Add Status</a></li>
                 <li><a href="viewstatus">View Status List</a></li>
                 
             </ul>
        </li>
             
         </li>
         
         <li class="">
             <a class="has-arrow" href="#" aria-expanded="false">
                 <img src="back/img/menu-icon/2.svg" alt="">
                 <span>Packages</span>
             </a>
             <ul>
                 <li><a href="newpackage">Add Package</a></li>
                 <li><a href="packages">View Packages</a></li>
                 
             </ul>
         </li>


         <li class="">
         <a class="has-arrow" href="#" aria-expanded="false">
             <img src="back/img/menu-icon/3.svg" alt="">
             <span>App Settings</span>
         </a>
         <ul>
             <li><a href="appsettings">Site settings</a></li>
            <!-- <li><a href="adminprofile">Profile settings</a></li>-->
             
         </ul>
     </li>
         
         
     </ul>
 </nav>';
 }
function staffheader()
{
    echo '<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <h3>Welcome  Admin</h3>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a href="#"> </a>
                        </li>
                        <li>
                            <a href="#">  </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="back/img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <p>Staff </p>
                            <h5>Admin</h5>
                            <div class="profile_info_details">
                                <!--<a href="#">My Profile <i class="ti-user"></i></a>
                                <a href="back/#">Settings <i class="ti-settings"></i></a>-->
                                <a href="logout">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}

function support($staffid, $message)
{
    include 'dbcon.php';
    if (empty(trim($message))) {
        echo 'please enter a message';
    } else {
        if (mysqli_query($conn, "INSERT INTO messages (staffid, message) VALUES ('$staffid', '$message')")) {
            echo 'success';
        } else {
            echo 'Failed to send message';
        }
    }
}

function addpackage($item, $status, $origin, $current, $destination, $pickupdate, $pickuptime, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks)
{
    if (empty(trim($item))) {
        echo 'please enter a item';
    } else {
        $rr = rand(1111111111, 9999999999);
        $rd = 'CCT'.$rr;
        $record = [
            'trackid' => $rd,
            'item' => $item,
            'status' => $status,
            'origin' => $origin,
            'current' => $current,
            'destination' => $destination,
            'dateadded' => date('jS F, Y'),
            'pickupdate' => $pickupdate,
            'pickuptime' => $pickuptime,

            'edeliverydate' => $edeliverydate,
            'departuretime' => $departuretime,
            'weight' => $weight,
            'shippername' => $shippername,
            'shipperaddress' => $shipperaddress,
            'recievername' => $recievername,
            'recieveraddress' => $recieveraddress,
            'paymode' => $paymode,
            'shipmode' => $shipmode,
            'remarks' => $remarks, ];

        $history = [
            'trackid' => $rd,
            'location' => $current,
            'status' => $status,
            'remarks' => $remarks,
            'dateadded' => $pickupdate,
            'timeadded' => $pickuptime, ];

        if ((insert('package', $record) == 'success') && (insert('history', $history) == 'success')) {
            echo 'success';
        } else {
            echo 'Failed to add package';
        }
    }
}

function showpackage()
{
    $dd = fetchall('package');
    foreach ($dd as $row) {
        echo '<tr>
        <th scope="row"> <a href="#" class="question_content"> '.$row['trackid'].'</a>
        </th>
        <td>'.$row['item'].'</td>
        <td>'.$row['origin'].'</td>
        <td>'.$row['current'].'</td>
        <td>'.$row['destination'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td>'.$row['status'].'</td>
        <td><a href="editpackage?id='.$row['id'].'" class="status_btn">Edit</a><button class="btn btn-danger btn-sm deletep" id="'.$row['id'].'">Delete</button></td>
    </tr>';
    }
}

function pdetail($id, $data)
{
    $dd = customfetch('package', [['id', '=', $id]]);
    echo $dd[0][$data];
}

function editpackage($id, $item, $status, $origin, $current, $destination, $pickupdate, $pickuptime, $edeliverydate, $departuretime, $weight, $shippername, $shipperaddress, $recievername, $recieveraddress, $paymode, $shipmode, $remarks, $trackid, $hdate, $htime)
{
    if (empty(trim($item))) {
        echo 'please enter a item';
    } else {
        $record = [
            'item' => $item,
            'origin' => $origin,
            'current' => $current,
            'destination' => $destination,
            'status' => $status,
            'pickupdate' => $pickupdate,
            'pickuptime' => $pickuptime,
            'edeliverydate' => $edeliverydate,
            'departuretime' => $departuretime,
            'weight' => $weight,
            'shippername' => $shippername,
            'shipperaddress' => $shipperaddress,
            'recievername' => $recievername,
            'recieveraddress' => $recieveraddress,
            'paymode' => $paymode,
            'shipmode' => $shipmode,
            'remarks' => $remarks, ];

        $history = [
            'trackid' => $trackid,
            'location' => $current,
            'status' => $status,
            'remarks' => $remarks,
            'dateadded' => $hdate,
            'timeadded' => $htime, ];

        if (update('package', $record, ['id' => $id]) == 'success' && insert('history', $history) == 'success') {
            echo 'Updated Successfully';
        } else {
            echo 'Failed to edit package';
        }
    }
}
function login($email, $password)
{
    if (authenticate('cmd', [['email', '=', $email]]) == 'success') {
        if (loginauth('cmd', 'admin', [['email', '=', $email], ['password', '=', md5($password)]], 'AND') == 'success') {
            echo 'loginsuccess';
        } else {
            echo 'Incorrect Password';
        }
    } else {
        echo 'Incorrect email';
    }
}

function app($data)
{
    $d = fetchall('settings');
    echo $d[0][$data];
}

function app1($data)
{
    $d = fetchall('settings');

    return $d[0][$data];
}
function editapp($appname, $appfooter, $appcontact, $appemail, $appaddress, $appabout)
{
    $record = [
        'appname' => $appname,
        'appfooter' => $appfooter,
        'appcontact' => $appcontact,
        'appemail' => $appemail,
        'appaddress' => $appaddress,
        'appabout' => $appabout, ];

    if (update('settings', $record, [], $_FILES, '../yolkassets/upload/') == 'success') {
        echo 'Updated Successfully';
    } else {
        echo 'Failed to update app';
    }
}

function deletepackage($id)
{
    if (delete('package', [['id', '=', $id]]) == 'success') {
        echo 'Deleted Successfully';
    } else {
        echo 'Failed to delete package';
    }
}

function addstatus($stname)
{
    if (empty(trim($stname))) {
        echo 'please enter a status';
    } else {
        $record = [
            'stname' => $stname, ];

        if (insert('status', $record) == 'success') {
            echo 'success';
        } else {
            echo 'Failed to add status';
        }
    }
}

function showstatus()
{
    $dd = fetchall('status');
    foreach ($dd as $row) {
        echo '<tr>
       
        <td>'.$row['stname'].'</td>
       
        <td><button class="btn btn-danger btn-sm deletes" id="'.$row['id'].'">Delete</button></td>
    </tr>';
    }
}
function deletestatus($id)
{
    if (delete('status', [['id', '=', $id]]) == 'success') {
        echo 'Deleted Successfully';
    } else {
        echo 'Failed to delete package';
    }
}

function status()
{
    $do = '';
    $dd = fetchall('status');
    foreach ($dd as $row) {
        $do .= '<option value="'.$row['stname'].'">'.$row['stname'].'</option>';
    }

    return $do;
}
