<?php
$Querynew = "SELECT GROUP_CONCAT(admin_city_id) as asdf FROM admin_access WHERE admin_detail_id='$newloginid' group by admin_detail_id";
$recnew = mysql_query($Querynew);
$resnew = mysql_fetch_array($recnew);
$asdf = $resnew['asdf'];
if (isset($_GET['seletype']) && $_REQUEST['seletype'] == 'C') {

    if (isset($_REQUEST['favouritsrch']) && $_REQUEST['favouritsrch'] != "") {
        $fvrtsrch = ",PropertyInfo as Propty,Favorite as Fvrt";
    } else {
        $fvrtsrch = "";
    }


    $Query = "Select distinct Login.*,RINFO.Id as rinfoid,RIy7NFO.Firstname,RINFO.Lastname,RINFO.Area_move,RINFO.Lmove_date,RINFO.Reminder_date,RINFO.probability,RINFO.added_by,ADMNDT.admin_name from Login as Login, Renter_info as RINFO,admin_details as ADMNDT " . $fvrtsrch . "  Where Login.Id = RINFO.Login_ID and (RINFO.Cityid in($asdf)) and (ADMNDT.admin_detail_id=RINFO.added_by OR RINFO.added_by IS NULL OR RINFO.added_by='0')";


    $NoOfRecord = "";
    if ($_GET['list'] == "all") {
        $NoOfRecord = "Select RINFO.Id as rinfoid from Login as Login, Renter_info as RINFO,admin_details as ADMNDT " . $fvrtsrch . "  Where Login.Id = RINFO.Login_ID and (RINFO.Cityid in($asdf)) and (ADMNDT.admin_detail_id=RINFO.added_by OR RINFO.added_by IS NULL OR RINFO.added_by='0') ";
    }

    if (isset($_GET['rentersearch']) && $_REQUEST['rentersearch'] == 'Renter_list') {
        $Query = "Select distinct Login.*,RINFO.Id as rinfoid,RINFO.Firstname,RINFO.Lastname,RINFO.Area_move,RINFO.Lmove_date,RINFO.Reminder_date,RINFO.probability,RINFO.added_by,ADMNDT.admin_name from Login as Login, Renter_info as RINFO,admin_details as ADMNDT " . $fvrtsrch . " Where Login.Id = RINFO.Login_ID  and  (RINFO.Cityid in($asdf)) and (ADMNDT.admin_detail_id=RINFO.added_by OR RINFO.added_by IS NULL OR RINFO.added_by='0') ";

        $temp = 0;

        if ((isset($_REQUEST['PR_from']) && $_REQUEST['PR_from'] != "") and (isset($_REQUEST['PR_to']) && $_REQUEST['PR_to'] != "")) {
            $Query     .= " AND ";
            $Query .= " RINFO.probability>='" . $_REQUEST['PR_from'] . "' AND RINFO.probability<='" . $_REQUEST['PR_to'] . "'";
            $temp = 1;
        }

        if ((isset($_REQUEST['CD_from']) && $_REQUEST['CD_from'] != "") and (isset($_REQUEST['CD_to']) && $_REQUEST['CD_to'] != "")) {
            $Query .= " AND ";
            $Query .= " (Login.CreatedOn BETWEEN '" . $_REQUEST['CD_from'] . "' AND '" . $_REQUEST['CD_to'] . "') ";
            $temp = 1;
        }

        if (isset($_REQUEST['srch_bedroom']) && $_REQUEST['srch_bedroom'] != "") {
            $Query .= " AND ";
            $Query .= "  RINFO.bedroom = '" . $_REQUEST[srch_bedroom] . "'";
            $temp = 1;
        }

        if ((isset($_REQUEST['desiredrent_from']) && $_REQUEST['desiredrent_from'] != "") and (isset($_REQUEST['desiredrent_to']) && $_REQUEST['desiredrent_to'] != "")) {
            $Query .= " AND ";
            $Query .= " RINFO.Rent_start_range>='" . $_REQUEST['desiredrent_from'] . "' AND RINFO.Rent_end_range<='" . $_REQUEST['desiredrent_to'] . "'";
            $temp = 1;
        }

        if (isset($_REQUEST['keywords_srch']) && $_REQUEST['keywords_srch'] != "") {
            $Query .= " AND ";
            $Query .= "  (RINFO.Cross_street LIKE '%" . $_REQUEST[keywords_srch] . "%' OR RINFO.Area_move LIKE '%" . $_REQUEST[keywords_srch] . "%' OR RINFO.Rent_start_range LIKE '%" . $_REQUEST[keywords_srch] . "%' OR RINFO.Rent_end_range LIKE '%" . $_REQUEST[keywords_srch] . "%')";
            $temp = 1;
        }

        /*favourite*/
        if (isset($_REQUEST['favouritsrch']) && $_REQUEST['favouritsrch'] != "") {
            $Query .= " AND ";
            $Query .= "  Propty.PropertyName LIKE '%" . $_REQUEST['favouritsrch'] . "%' AND Propty.Id = Fvrt.PropertyId AND RINFO.Login_ID=Fvrt.UserId ";
            $temp = 1;
        }

        if (isset($_REQUEST['firstname']) && $_REQUEST['firstname'] != "") {
            $Query .= " AND ";
            $Query .= "  lower(RINFO.Firstname) LIKE '%" . strtolower($_REQUEST['firstname']) . "%'";
            $temp = 1;
        }
        if (isset($_REQUEST['lastname']) && $_REQUEST['lastname'] != "") {
            $Query .= " AND ";
            $Query .= "  lower(RINFO.Lastname) LIKE '%" . strtolower($_REQUEST['lastname']) . "%'";
            $temp = 1;
        }
        if (isset($_REQUEST['phone']) && $_REQUEST['phone'] != "") {
            $Query .= " AND ";
            $Query .= " lower(RINFO.phone) LIKE '%" . strtolower($_REQUEST['phone']) . "%'";

            $temp = 1;
        }

        if ((isset($_REQUEST['Emove_date']) && $_REQUEST['Emove_date'] != "") && (isset($_REQUEST['Lmove_date']) && $_REQUEST['Lmove_date'] != "")) {
            $Query .= "AND ";
            $Query .= "( (DATE(RINFO.Emove_date) = DATE_FORMAT('$_REQUEST[Emove_date]','%Y-%m-%e')) OR ";
            $Query .= " (DATE(RINFO.Lmove_date) = DATE_FORMAT('$_REQUEST[Lmove_date]','%Y-%m-%e')) )";
        } else {
            if (isset($_REQUEST['Emove_date']) && $_REQUEST['Emove_date'] != "") {
                $Query     .= "AND ";
                $Query     .= " (DATE(RINFO.Emove_date) = DATE_FORMAT('$_REQUEST[Emove_date]','%Y-%m-%e'))";
                $temp = 1;
            }
            if (isset($_REQUEST['Lmove_date']) && $_REQUEST['Lmove_date'] != "") {
                $Query     .= "AND ";
                $Query     .= " (DATE(RINFO.Lmove_date) = DATE_FORMAT('$_REQUEST[Lmove_date]','%Y-%m-%e'))";
                $temp = 1;
            }
        }




        if (isset($_REQUEST['admin']) && $_REQUEST['admin'] != 0) {
            $Query     .= " AND ";
            $Query     .= "  RINFO.added_by = '$_REQUEST[admin]'";
            $temp = 1;
        }

        if (isset($_REQUEST['Remail']) && $_REQUEST['Remail'] != "") {
            $Query     .= "AND ";
            $Query     .= " lower(Login.Email) like '%" . strtolower($_REQUEST[Remail]) . "%'";
            $temp = 1;
        }

        if (isset($_GET['status']) && $_REQUEST['status'] != "") {
            $Query     .= " AND  Login.Status = '$_REQUEST[status]' ";
        }

        if (isset($_GET['status']) && $_REQUEST['status'] != "" && $_REQUEST['rentersearch'] == 'Renter_list') { //added by me
            $Query .= " GROUP BY RINFO.Login_ID";
        }
    }
} elseif (isset($_REQUEST['seletype']) && $_REQUEST['seletype'] == 'M') {


    $Query = "Select distinct Login.*,PINFO1.PropertyName from  Login as Login,PropertyInfo as PINFO1 Where Login.Id=PINFO1.UserId and PINFO1.CityId IN (" . $asdf . ")"; 

    if (isset($_REQUEST['managersearch']) && $_REQUEST['managersearch'] == 'Manager_list') {
        if (isset($_REQUEST['Rusername']) && $_REQUEST['Rusername'] != "") {
            $Query = "Select distinct Login.*,PINFO1.PropertyName from Login as Login left join(select PINFO.UserId,PINFO.PropertyName,PINFO.Company,PINFO.CityId from PropertyInfo as PINFO) as PINFO1 ON Login.Id=PINFO1.UserId  Where PINFO1.CityId IN (" . $asdf . ") ";
        } else if (isset($_REQUEST['Rusername']) && $_REQUEST['Rusername'] != "" && $_REQUEST['RManage'] != "") {
            $Query = "Select distinct Login.*,PINFO1.PropertyName from Login as Login left join(select PINFO.UserId,PINFO.PropertyName,PINFO.Company,PINFO.CityId from PropertyInfo as PINFO) as PINFO1 ON Login.Id=PINFO1.UserId  Where PINFO1.CityId IN (" . $asdf . ") ";
        } else if (isset($_REQUEST['Rusername']) && $_REQUEST['Rusername'] != "" && $_REQUEST['RProperty'] != "") {
            $Query = "Select distinct Login.*,PINFO1.PropertyName from Login as Login left join(select PINFO.UserId,PINFO.PropertyName,PINFO.Company,PINFO.CityId from PropertyInfo as PINFO) as PINFO1 ON Login.Id=PINFO1.UserId  Where PINFO1.CityId IN (" . $asdf . ") ";
        } else if (isset($_REQUEST['Ruseremail']) && $_REQUEST['Ruseremail'] != "") {
            $Query = "Select distinct Login.*,PINFO1.PropertyName from Login as Login left join(select PINFO.UserId,PINFO.PropertyName,PINFO.Company,PINFO.CityId from PropertyInfo as PINFO) as PINFO1 ON Login.Id=PINFO1.UserId  Where PINFO1.CityId IN (" . $asdf . ") ";
        } else {
            $Query = "Select distinct Login.*,PINFO1.PropertyName from Login as Login left join(select PINFO.UserId,PINFO.PropertyName,PINFO.Company,PINFO.CityId from PropertyInfo as PINFO) as PINFO1 ON Login.Id=PINFO1.UserId  Where PINFO1.CityId IN (" . $asdf . ") ";
        }

        $temp = 0;
        if (isset($_REQUEST['Rusername']) && $_REQUEST['Rusername'] != "") {
            $Query .= "AND ";
            $Query .= "  lower(Login.UserName) like '%" . strtolower($_REQUEST['Rusername']) . "%'";
            $temp = 1;
        }
        if (isset($_REQUEST['RManage']) && $_REQUEST['RManage'] != "") {
            $Query .= "AND ";
            $Query .= "  lower(PINFO1.Company) like '%" . strtolower($_REQUEST['RManage']) . "%'";
            $temp = 1;
        }
        if (isset($_REQUEST['RProperty']) && $_REQUEST['RProperty'] != "") {
            $Query .= "AND ";
            $Query .= " lower(PINFO1.PropertyName) like '%" . strtolower($_REQUEST['RProperty']) . "%'";
            $temp = 1;
        }
        if (isset($_REQUEST['Ruseremail']) && $_REQUEST['Ruseremail'] != "") {
            $Query .= "AND ";
            $Query .= " lower(Login.Email) like '%" . strtolower($_REQUEST['Ruseremail']) . "%'";
            $temp = 1;
        }

        if (isset($_REQUEST['status']) && $_REQUEST['status'] != "") {
            $Query .= " AND  Login.Status = '{$_REQUEST['status']}' ";
        }
    }
} else {
}
