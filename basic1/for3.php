<?php 
	/*  從GET參數讀入數字v，並判斷從 1~v 之間有哪些數字既被7整除也被2整除 
		「%」代表的是取餘數。所以當餘數為0的時候就是整除。
		「==」代表的是判斷左有兩邊的值是不是相同的，也就是一般使用的等於符號。
		「&&」是and符號，如同邏輯上的and一樣，必須是兩者皆成立，判斷式才會成立。
	*/
	$v = $_GET['input'];
	for($i=1;$i<=$v;$i++) {
		if($i%7==0 && $i%2==0) {			
			echo "$i <br>";
		}
	}
	
?>