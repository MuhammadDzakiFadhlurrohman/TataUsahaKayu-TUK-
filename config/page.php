<?php
 if(isset($_GET['page']))
 	{  
 		$page = $_GET['page']; 
		switch ($page) { 
 		 case 'user': 
 		  include '../users/user/index.php';
 		    break;  
 		    case 'operator': 
 		     include '../users/operator/operator.php';
 		       break; 
 		        case 'scaler':  
 		        include '../users/scaler/scaler.php';
 		          break; 
 		           case 'pengawas':
 		             include '../users/pengawas/pengawas.php';
 		               break; 
 		                case 'rkt': 
 		                include '../rkt/index.php'; 
 		                 break;
 		                   case 'rekanan': 
 		                    include '../rekanan/index.php'; 
 		                    break;  
 		                     case 'harvesting': 
 		                      include '../harvesting/index.php';
 		                       break;  
                               case 'pengukuran':
                                include '../tuk/pengukuran/index.php';
                                break;
                                case 'pengukuran28':
                                    include '../tuk/pengukuran/28/index28.php';
                                    break;
									case 'pengukuran42':
										include '../tuk/pengukuran/42/index42.php';
										break;
										case 'hauling':
											include '../tuk/hauling/index.php';
											break;
											case 'hauling28':
												include '../tuk/hauling/28/index28.php';
												break;
												case 'hauling42':
													include '../tuk/hauling/42/index42.php';
													break;

 		                } 
 		            }else
 		            { include('Error404.php');
 		        } 
 		        ?> 