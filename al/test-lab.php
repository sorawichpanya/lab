<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>วงดนตรีที่ชื้นชอบ</title>
</head>

<body><br>
<h4> นายสรวิชญ์ ปัญญา 65010914634 DBIS</h4>
<h1> แบบสอบถามวงดนตรีที่ชื่นชอบ </h1>
<form method="post" action="">
	ชื่อ(นามสมมุติ) <input type="text" name="a" required autofocus><br><br>
   	วงดนตรที่ชื่นชอบที่สุดในดวงใจ	<input type="text" name="b" required ><br><br>
    ยกตัวอย่างเพลงที่ชอบจากวงนี้ <br>
	<textarea class="form-control" name="c" rows="3"></textarea><br><br>
    คุณเป็นแฟนคลับวงนี้มากี่ปี <select class="form-select" name="d" aria-label="Default select example"  >
  						<option selected>จำนวนปีที่ติดตาม</option>
                        <option value="น้อยกว่า 1 ปี"> น้อยกว่า 1 ปี</option>
  						<option value="1-2 ปี"> 1-2 ปี</option>
                         <option value="3-4 ปี"> 3-4 ปี</option>
                         <option value="มากกว่า 5 ปี"> มากกว่า 5 ปี</option>
						</select><br>
								<br>

    คุณเคยไปดูไปคอนเสิร์ตวงนี้กี่ครั้ง <select class="form-select" name="e" aria-label="Default select example"  >
  								<option selected>จำนวนครั้ง</option>
                        		<option value="1-2 ครั้ง">  1-2 ครั้ง</option>
  								<option value="3-4 ครั้ง"> 3-4 ครั้ง</option>
                         		<option value="5-6 ครั้ง"> 5-6 ครั้ง</option>
                         		<option value="มากกว่า 6 ครั้ง"> มากกว่า 6 ครั้ง</option>
							</select><br>
                                     <br>
	 วงดนตรีที่คิดว่าดังที่สุดในปัจจุบัน <input type="text" name="f" ><br><br>    

 <button type="submit" name="submit" class="btn btn-dark">OK</button>
 </form>
 
<?php

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		include_once("../connectdb.php");
		$mname = $_POST['a'];
		$mfav = $_POST['b'];
		$mex = $_POST['c'];
		$myear = $_POST['d'];
		$mcon = $_POST['e'];
		$mpre = $_POST['f'];
		$sql = "INSERT INTO favorite_music_band (m_name, m_fav, m_ex, m_year, m_con, m_pre) VALUES ('{$mname}','{$mfav}','{$mex}','{$myear}','{$mcon}','{$mpre}')";
		mysqli_query($conn, $sql) or die ('เจ้าเพิ่มบ่ถูก');
		
		echo "<script>";
		echo "alert('เพี่มถูกจ้า');";
		echo "</script>";
	}
?>
<?php
	include_once("../connectdb.php");
	$sql = "SELECT * FROM `favorite_music_band` ORDER BY `m_id` ASC";
	$rs = mysqli_query($conn , $sql);
?>
<?php
        while ($data = mysqli_fetch_array($rs)) {
		}
?>
		<?php echo $data['m_name']; ?>

</body>
</html>