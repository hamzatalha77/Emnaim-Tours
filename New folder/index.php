<?php
include 'config.php';
if(isset($_POST['insert'])){
    $user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];	
	$query = "INSERT INTO admin (user, email, pass) VALUES ('$user', '$email', '$pass')";
	mysqli_query($conn, $query);
    require('fpdf/fpdf.php');
    $title = 'User Report';
    $pdf = new FPDF();
    $pdf -> Addpage();
    $pdf -> SetTitle($title);
    $pdf -> SetFont('Arial', 'B', 15);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    $pdf->SetLineWidth(1);
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    $pdf->Ln(10);
    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($pass)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'user:', 1, 0, 'C');
    $pdf->Cell($w, 10, $user, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'email:', 1, 0, 'C');
    $pdf->Cell($w, 10, $email, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'pass:', 1, 0, 'C');
    $pdf->Cell($w, 10, $pass, 1, 1, 'C');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PDF using PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Add New Users
        </div>
        <div class="body">
            <form action='index.php' method="POST">
                <input type="hidden" name="id">
                <input type="text" name="user" placeholder="Type Your Name">
                <input type="text" name="email" placeholder=" Type Your Name">
                <input type="password" name="pass" placeholder="Type Your Password">
                <input type="submit" name="insert" value="Add User">
            </form>
        </div>
        <div class="footer">
            <p>Developed by <a href="https://vicodemedia.com" target="_blank">Vicode Media</a></p>
        </div>
    </div>
</body>
</html>