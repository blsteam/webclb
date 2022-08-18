<?php
    include "ajax_config.php";

    $output = '';
    $sql_select = mysqli_query($conn, "SELECT * FROM users ORDER BY id");

    $output .= '
    <table class="content-table table-bordered">
    <thead>
        <tr>
            <th><h3 class="STT">STT</h3></th>
            <th><h3>Tên thành viên</h3></th>
            <th><h3>Chức vụ</h3></th>
            <th><h3>Vị trí</h3></th>
            <th><h3>Liên hệ</h3></th>
        </tr>
    </thead>
    ';

    if(mysqli_num_rows($sql_select) > 0)
    {
        while($rows = mysqli_fetch_array($sql_select))
        {
            if($rows['job'] == 'Chủ nhiệm' || $rows['job'] == 'Trưởng CLB' || $rows['job'] == 'Phó CLB' || $rows['verify'] == 'verified')
            {
                $output .= '
                    <tbody>
                        <tr name = '.$rows['username'].' class = "active-row">
                            <td><h6 class = "stt">'.$rows['id'].'</h6></td>
                            <td>
                                <h6>'.$rows['name'].'
                                    <span class="item">
                                        <div class="tooltip"><p class="verified">Đã xác minh</p></div>
                                            <span class="icon">
                                                <i class="fa-solid fa-circle-check"></i>
                                            </span>
                                        </div>
                                    </span>
                                </h6>
                            </td>
                            <td><h6>'.$rows['job'].'</h6></td>
                            <td><h6>'.$rows['area'].'</h6></td>
                            <td><h6>'.$rows['phone'].'</h6></td>
                    ';
            }
            if($rows['verify'] == "noverified")
            {
                $output .= '
                    <tbody>
                        <tr name = '.$rows['username'].' class = "active-row">
                            <td><h6 class = "stt">'.$rows['id'].'</h6></td>
                            <td>
                                <h6>'.$rows['name'].'</h6>
                            </td>
                            <td><h6>'.$rows['job'].'</h6></td>
                            <td><h6>'.$rows['area'].'</h6></td>
                            <td><h6>'.$rows['phone'].'</h6></td>
                    ';
            }else{
                $output .= '';
            }
        }
    }else{
        $output .= '
        <tr>
            <td colspan = "5">Dữ liệu chưa có</td>
        ';
    }
    $output .= '    
            </tr>
        </tbody>
    </table>
    ';
    echo $output;
?>