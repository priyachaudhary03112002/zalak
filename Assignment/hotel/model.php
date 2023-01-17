<?php
class model
{
	public $conn="";
	function __construct()
	{						//   server     username  passs db_name
		$this->conn=new Mysqli('localhost','root','','hotel'); 
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	// join 2 table
	function select_join2($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	// join 3 table
	function select_join3($tbl1,$tbl2,$on,$tbl3,$on1)
	{
		$sel="select * from $tbl1 join $tbl2 on $on join $tbl3 on $on1";
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	
	
	
	
	function insert($tbl,$data)
	{
		//$data=array("name"=>$name,"email"=>$email,"unm"=>$unm,"pass"=>$pass,"gen"=>$gen,"lag"=>$lag,"file"=>$file)
		
		$array_key=array_keys($data);
		$col=implode(",",$array_key);
		
		$array_values=array_values($data);
		$val=implode("','",$array_values);
		
		$ins="insert into $tbl($col) values ('$val')";
		$run=$this->conn->query($ins);
		return $run;
	}
	
	
	 // login and fetch data
	function select_where($tbl,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$sel="select * from $tbl where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}
	// join 2 table
	function select_where_join2($tbl1,$tbl2,$on,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}
	
	// join 3 table
	function select_where_join3($tbl1,$tbl2,$on,$tbl3,$on1,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on join $tbl3 on $on1 where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$sel.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}
	
	
	function delete_where($tbl,$where)
	{
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$del="delete from $tbl where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
		
	}
	
	
	function update_where($tbl,$data,$where)
	{
		$upd="update $tbl set ";
		$darray_key=array_keys($data);
		$darray_values=array_values($data);
		$i=0;
		
		$count=count($data); 
		foreach($data as $d)
		{
			if($count==$i+1)
			{
				$upd.= "$darray_key[$i]='$darray_values[$i]'";
			}
			else
			{
				$upd.= "$darray_key[$i]='$darray_values[$i]',";
				$i++;
			}
		}
		$array_key=array_keys($where);
		$array_values=array_values($where);
		
		$upd.=" where 1=1"; // 1=1 means query continue
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $array_key[$i]='$array_values[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);
		return $run;
		
	}


	
	
}
$obj=new model;

?>