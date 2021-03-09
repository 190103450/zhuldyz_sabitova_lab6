<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function operation($num1,$sign, $num2){
    	switch ($sign) {
    		case '+':
    			# code...
    		$result = $num1+$num2;
    		return view('/myview',['result'=>$result]);
    			break;
    			case '-':
    			# code...
    		$result = $num1-$num2;
    		return view('/myview',['result'=>$result]);
    			break;
    			case '*':
    			# code...
    		$result = $num1*$num2;
    		return view('/myview',['result'=>$result]);
    			break;
    			case 'divide':
    			# code...
    		$result = $num1/$num2;
    		return view('/myview',['result'=>$result]);
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
