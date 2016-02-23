
<?php foreach($result as $row){

if (Session::has('val'))
{

    $x=Session::get('val');

    if($x>9)
        {
echo 'ddss';
        }
}



else{

    $x=1;
}




?>

<img  src="{{asset($row->image_path)}}" alt="" />
<form action="getnext<?php echo $x;$x++;  if($x<9){Session::put('val',$x);} else{$value = Session::pull('val', 1);
}?>" method="post">
    <input type="submit" name="next" value="Next">

</form>
<?php $x++; }?>