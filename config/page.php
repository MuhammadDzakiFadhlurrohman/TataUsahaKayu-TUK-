<?php
 if(isset($_GET['page']))
 	{  
 		$page = $_GET['page']; switch ($page) { 
 		 case 'user': 
 		  include '../users/user.php';
 		    break;  
 		    case 'operator': 
 		     include '../users/operator.php';
 		       break; 
 		        case 'scaler':  
 		        include '../users/scaler.php';
 		          break; 
 		           case 'pengawas':
 		             include '../users/pengawas.php';
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
                                case 'hauling':
                                    include '../tuk/hauling/index.php';
                                    break;
                                    case 'laporan':
                                        include '../laporan/index.php';
                                        break;
 		                } 
 		            }else
 		            {  include('beranda.html');
 		        } 
 		        ?> 