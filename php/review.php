<?php
session_start();
if($_SESSION["admin"]=="")
{
?>
<script type="text/javascript">
window.location="admin_login.php";
</script>
<?php
}
include "header.php";

?>

<?php


$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "burger_shop");
?>

<div class="grid_10">
    <div class="box round first">
        <h2>
            Display Order</h2>

        <div class="block">

            <?php
            $res = mysqli_query($link, "select * from review order by pid asc");
            echo "<table border='4'>";
            echo "<tr>";
            echo "<td style='font-weight:bold'>"; echo "Product ID"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "User ID"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "User Name"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Review"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Rating"; echo "</td>";
            echo "<td style='font-weight:bold'>"; echo "Date & Time"; echo "</td>";
            
            echo "</tr>";

            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["pid"]; echo "</td>";
                echo "<td>"; echo $row["uid"]; echo "</td>";
                echo "<td>"; echo $row["name"]; echo "</td>";
                echo "<td>"; echo $row["review"]; echo "</td>";
                echo "<td>"; echo $row["star"]; echo "</td>";
                echo "<td>"; echo $row["date"]; echo "</td>";
                
                echo "</tr>";
            }
            echo "</table>";

            ?>

        </div>
    </div>
    <?php
    include "footer.php";

    ?>