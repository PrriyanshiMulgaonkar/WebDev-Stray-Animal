<?php

$con = mysqli_connect('localhost', 'root', '', 'training') or die("connection failed");

$query = "select * from upload";
$res = mysqli_query($con, $query);

?>

<table border="2px" cellpadding="20px" cellspacing="20px">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>profile</th>
            </tr>
            <tr>
                <?php

                    while($arr = mysqli_fetch_array($res))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['id']?></td>
                    <td><?php echo $arr['name']?></td>
                    <td><img src="<?php echo $arr['filepath'];?>" alt="jskdf"><?php echo $arr['id']?></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
        </table>