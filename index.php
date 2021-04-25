<?php

date_default_timezone_set('Europe/Paris');
error_reporting(0);

global $_CONFIG;
$_CONFIG['dir_data'] = 'data';
$_CONFIG['file_database'] = $_CONFIG['dir_data'].'/books.php';
$_CONFIG['file_settings'] = $_CONFIG['dir_data'].'/settings.php';
$_CONFIG['file_logs'] = $_CONFIG['dir_data'].'/logs.txt';
$_CONFIG['file_jail'] = $_CONFIG['dir_data'].'/jail.php';
$_CONFIG['dir_images'] = 'images';
$_CONFIG['dir_cache'] = 'themes/cache';
$_CONFIG['dir_themes'] = 'themes';
$_CONFIG['default_theme'] = 'default';
$_CONFIG['default_image'] = $_CONFIG['dir_images'].'/book.jpg';
$_CONFIG['default_norobots'] = 'noindex,nofollow,noarchive';
$_CONFIG['title'] = 'Books';
$_CONFIG['robots'] = $_CONFIG['default_norobots'];
$_CONFIG['theme'] = $_CONFIG['default_theme'];
$_CONFIG['ban_after'] = 4;
$_CONFIG['ban_duration'] = 1800;
$_CONFIG['pagination'] = 10;
$_CONFIG['pagination_rss'] = 2*$_CONFIG['pagination'];

$_CONFIG['countries'] = array('ad'=>'Andorra','ae'=>'United Arab Emirates','af'=>'Afghanistan','ag'=>'Antigua and Barbuda','ai'=>'Anguilla','al'=>'Albania','am'=>'Armenia','an'=>'Netherlands Antilles','ao'=>'Angola','ar'=>'Argentina','as'=>'American Samoa','at'=>'Austria','au'=>'Australia','aw'=>'Aruba','az'=>'Azerbaijan','ba'=>'Bosnia and Herzegovina','bb'=>'Barbados','bd'=>'Bangladesh','be'=>'Belgique','bf'=>'Burkina Faso','bg'=>'Bulgaria','bh'=>'Bahrain','bi'=>'Burundi','bj'=>'Benin','bm'=>'Bermuda','bn'=>'Brunei Darussalam','bo'=>'Bolivia, Plurinational State of','br'=>'Brazil','bs'=>'Bahamas','bt'=>'Bhutan','bv'=>'Bouvet Island','bw'=>'Botswana','by'=>'Belarus','bz'=>'Belize','ca'=>'Canada','cd'=>'Democratic Republic of the Congo','cf'=>'Central African Republic','cg'=>'Congo','ch'=>'Switzerland','ci'=>'Côte d’Ivoire','ck'=>'Cook Islands','cl'=>'Chile','cm'=>'Cameroon','cn'=>'China','co'=>'Colombia','cr'=>'Costa Rica','cu'=>'Cuba','cv'=>'Cape Verde','cw'=>'Curaçao','cy'=>'Cyprus','cz'=>'Czech Republic','de'=>'Germany','dj'=>'Djibouti','dk'=>'Denmark','dm'=>'Dominica','do'=>'Dominican Republic','dz'=>'Algeria','ec'=>'Ecuador','ee'=>'Estonia','eg'=>'Egypt','eh'=>'Western Sahara','er'=>'Eritrea','es'=>'Spain','et'=>'Ethiopia','fi'=>'Finland','fj'=>'Fiji','fk'=>'Falkland Islands (Malvinas)','fm'=>'Federated States of Micronesia','fo'=>'Faroe Islands','fr'=>'France','ga'=>'Gabon','gb'=>'United Kingdom','gd'=>'Grenada','ge'=>'Georgia','gf'=>'French Guiana','gg'=>'Guernsey','gh'=>'Ghana','gi'=>'Gibraltar','gl'=>'Greenland','gm'=>'Gambia','gn'=>'Guinea','gp'=>'Guadeloupe','gq'=>'Equatorial Guinea','gr'=>'Greece','gs'=>'South Georgia and the South Sandwich Islands','gt'=>'Guatemala','gu'=>'Guam','gw'=>'Guinea-Bissau','gy'=>'Guyana','hk'=>'Hong Kong','hm'=>'Heard Island and McDonald Islands','hn'=>'Honduras','hr'=>'Croatia','ht'=>'Haiti','hu'=>'Hungary','id'=>'Indonesia','ie'=>'Ireland','il'=>'Israel','im'=>'Isle of Man','in'=>'India','io'=>'British Indian Ocean Territory','iq'=>'Iraq','ir'=>'Islamic Republic of Iran','is'=>'Iceland','it'=>'Italy','je'=>'Jersey','jm'=>'Jamaica','jo'=>'Jordan','jp'=>'Japan','ke'=>'Kenya','kg'=>'Kyrgyzstan','kh'=>'Cambodia','ki'=>'Kiribati','km'=>'Comoros','kn'=>'Saint Kitts and Nevis','kp'=>'Democratic People’s Republic of Korea','kr'=>'Republic of Korea','kw'=>'Kuwait','ky'=>'Cayman Islands','kz'=>'Kazakhstan','la'=>'Lao People’s Democratic Republic','lb'=>'Lebanon','lc'=>'Saint Lucia','li'=>'Liechtenstein','lk'=>'Sri Lanka','lr'=>'Liberia','ls'=>'Lesotho','lt'=>'Lithuania','lu'=>'Luxembourg','lv'=>'Latvia','ly'=>'Libya','ma'=>'Morocco','mc'=>'Monaco','md'=>'Republic of Moldova','me'=>'Montenegro','mg'=>'Madagascar','mh'=>'Marshall Islands','mk'=>'The Former Yugoslav Republic of Macedonia','ml'=>'Mali','mm'=>'Myanmar','mn'=>'Mongolia','mo'=>'Macao','mp'=>'Northern Mariana Islands','mq'=>'Martinique','mr'=>'Mauritania','ms'=>'Montserrat','mt'=>'Malta','mu'=>'Mauritius','mv'=>'Maldives','mw'=>'Malawi','mx'=>'Mexico','my'=>'Malaysia','mz'=>'Mozambique','na'=>'Namibia','nc'=>'New Caledonia','ne'=>'Niger','nf'=>'Norfolk Island','ng'=>'Nigeria','ni'=>'Nicaragua','ni'=>'Nicaragua','nl'=>'Netherlands','no'=>'Norway','np'=>'Nepal','nr'=>'Nauru','nu'=>'Niue','nz'=>'New Zealand','om'=>'Oman','pa'=>'Panama','pe'=>'Peru','pf'=>'French Polynesia','pg'=>'Papua New Guinea','ph'=>'Philippines','pk'=>'Pakistan','pl'=>'Poland','om'=>'Saint Pierre and Miquelon','mn'=>'Pitcairn','pr'=>'Puerto Rico','ps'=>'State of Palestine','pt'=>'Portugal','pw'=>'Palau','py'=>'Paraguay','qa'=>'Qatar','re'=>'Réunion','ro'=>'Romania','rs'=>'Serbia','ru'=>'Russian Federation','rw'=>'Rwanda','sa'=>'Saudi Arabia','sb'=>'Solomon Islands','sc'=>'Seychelles','sd'=>'Sudan','se'=>'Sweden','sg'=>'Singapore','sh'=>'Saint Helena, Ascension and Tristan da Cunha','si'=>'Slovenia','sk'=>'Slovakia','sl'=>'Sierra Leone','sm'=>'San Marino','sn'=>'Senegal','so'=>'Somalia','sr'=>'Suriname','ss'=>'South Sudan','st'=>'Sao Tome and Principe','sv'=>'El Salvador','sx'=>'Sint Maarten (Dutch part)','sy'=>'Syrian Arab Republic','sz'=>'Swaziland','tc'=>'Turks and Caicos Islands','td'=>'Chad','tf'=>'French Southern Territories','tg'=>'Togo','th'=>'Thailand','tj'=>'Tajikistan','tk'=>'Tokelau','tl'=>'Timor-Leste','tm'=>'Turkmenistan','tn'=>'Tunisia','to'=>'Tonga','tr'=>'Turkey','tt'=>'Trinidad and Tobago','tv'=>'Tuvalu','tw'=>'Taiwan, Province of China','tz'=>'United Republic of Tanzania','ua'=>'Ukraine','ug'=>'Uganda','um'=>'United States Minor Outlying Islands','us'=>'United States','uy'=>'Uruguay','uz'=>'Uzbekistan','va'=>'Holy See (Vatican City State)','vc'=>'Saint Vincent and the Grenadines','ve'=>'Bolivarian Republic of Venezuela','vg'=>'Virgin Islands, British','vi'=>'Virgin Islands, U.S.','vn'=>'Viet Nam','vu'=>'Vanuatu','wf'=>'Wallis and Futuna','ws'=>'Samoa','ye'=>'Yemen','yt'=>'Mayotte','za'=>'South Africa','zm'=>'Zambia','zw'=>'Zimbabwe');

define('PHPPREFIX','<?php /* ');
define('PHPSUFFIX',' */ ?>');
define('BOOKS', 'Books');
define('BOOKS_VERSION', '2.0.0');
define('INACTIVITY_TIMEOUT', 3600);
define('RSS', 'books.rss');

// Force cookie path (but do not change lifetime)
$cookie = session_get_cookie_params();
$cookiedir = ''; if (dirname($_SERVER['SCRIPT_NAME'])!='/') $cookiedir = dirname($_SERVER["SCRIPT_NAME"]).'/';
session_set_cookie_params($cookie['lifetime'], $cookiedir, $_SERVER['HTTP_HOST']);
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid', false);
session_name('Books_'.md5($_SERVER['SCRIPT_NAME']));
if (session_id() == '') session_start();

// Check rights before creating directories
if (!is_writable(realpath(dirname(__FILE__)))) die('<p><b style="color:red;">ERROR</b><br>Application does not have the right to write in its own directory <code>'.realpath(dirname(__FILE__)).'</code>.</p>');
if (!is_dir($_CONFIG['dir_data'])) { mkdir($_CONFIG['dir_data'],0705); chmod($_CONFIG['dir_data'],0705); }
if (!is_file($_CONFIG['dir_data'].'/.htaccess')) { file_put_contents($_CONFIG['dir_data'].'/.htaccess', 'Require all denied'); }
if (!is_file($_CONFIG['dir_data'].'/.htaccess')) die('<p><b style="color:red;">ERROR</b><br>Application does not have the right to write in its own directory <code>'.realpath(dirname(__FILE__)).'</code>.</p>');
if (!is_dir($_CONFIG['dir_cache'])) { mkdir($_CONFIG['dir_cache'],0705); chmod($_CONFIG['dir_cache'],0705); }
if (!is_file($_CONFIG['dir_cache'].'/.htaccess')) { file_put_contents($_CONFIG['dir_cache'].'/.htaccess', 'Require all denied'); }
if (!is_file($_CONFIG['file_jail'])) { file_put_contents($_CONFIG['file_jail'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export(array('failures'=>array(),'banned'=>array()), true).';'.PHP_EOL.'?>'); }

if (!is_file($_CONFIG['file_settings'])) { define('TITLE', $_CONFIG['title']); define('ROBOTS', $_CONFIG['default_norobots']); define('AUTHOR', 'Alan Turing'); installPage(new RainTpl()); }
require($_CONFIG['file_settings']);
define('TITLE', $_CONFIG['title']);
define('PAGINATION', $_CONFIG['pagination']);
define('ROBOTS', $_CONFIG['robots']);
define('AUTHOR', empty($_CONFIG['author']) ? $_CONFIG['login'] : $_CONFIG['author']);
define('BASE_URL', (empty($_SERVER['REQUEST_SCHEME']) ? 'http' : $_SERVER['REQUEST_SCHEME']).'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');
//define('CURRENT_URL_QUERY', htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY)));
define('THEME', $_CONFIG['dir_themes'].'/'.(empty($_CONFIG['theme']) ? $_CONFIG['default_theme'] : $_CONFIG['theme']));

// RainTpl and theme
$tpl = new RainTpl();
RainTpl::configure('tpl_dir', THEME.'/templates/');

/*
 * Rain class
 * @version 2.7.2
 */
class RainTpl {static $tpl_dir="themes/default/templates/";static $cache_dir="themes/cache/";static $base_url=null;static $tpl_ext="html";static $path_replace=false;static $path_replace_list=array('a','img','link','script','input');static $black_list=array('\$this','raintpl::','self::','_SESSION','_SERVER','_ENV','eval','exec','unlink','rmdir');static $check_template_update=true;static $php_enabled=false;static $debug=false;public $var=array();protected $tpl=array(),$cache=false,$cache_id=null;protected static $config_name_sum=array();const CACHE_EXPIRE_TIME=3600;function assign($variable,$value=null){if(is_array($variable))$this->var+=$variable;else $this->var[$variable]=$value;}function draw($tpl_name,$return_string=false){try{$this->check_template($tpl_name);}catch(RainTpl_Exception $e){$output=$this->printDebug($e);die($output);}if(!$this->cache&&!$return_string){extract($this->var);include $this->tpl['compiled_filename'];unset($this->tpl);}else{ob_start();extract($this->var);include $this->tpl['compiled_filename'];$raintpl_contents=ob_get_clean();if($this->cache)file_put_contents($this->tpl['cache_filename'],"<?php if(!class_exists('raintpl')){exit;}?>".$raintpl_contents);unset($this->tpl);if($return_string)return $raintpl_contents;else echo $raintpl_contents;}}function cache($tpl_name,$expire_time=self::CACHE_EXPIRE_TIME,$cache_id=null){$this->cache_id=$cache_id;if(!$this->check_template($tpl_name)&&file_exists($this->tpl['cache_filename'])&&(time()-filemtime($this->tpl['cache_filename'])<$expire_time))return substr(file_get_contents($this->tpl['cache_filename']),43);else{if(file_exists($this->tpl['cache_filename']))unlink($this->tpl['cache_filename']);$this->cache=true;}}static function configure($setting,$value=null){if(is_array($setting))foreach($setting as $key=>$value)self::configure($key,$value);else if(property_exists(__CLASS__,$setting)){self::$$setting=$value;self::$config_name_sum[$setting]=$value;}}protected function check_template($tpl_name){if(!isset($this->tpl['checked'])){$tpl_basename=basename($tpl_name);$tpl_basedir=strpos($tpl_name,"/")?dirname($tpl_name).'/':null;$tpl_dir=self::$tpl_dir.$tpl_basedir;$this->tpl['tpl_filename']=$tpl_dir.$tpl_basename.'.'.self::$tpl_ext;$temp_compiled_filename=self::$cache_dir.$tpl_basename.".".md5($tpl_dir.serialize(self::$config_name_sum));$this->tpl['compiled_filename']=$temp_compiled_filename.'.rtpl.php';$this->tpl['cache_filename']=$temp_compiled_filename.'.s_'.$this->cache_id.'.rtpl.php';if(self::$check_template_update&&!file_exists($this->tpl['tpl_filename'])){$e=new RainTpl_NotFoundException('Template '.$tpl_basename.' not found!');throw $e->setTemplateFile($this->tpl['tpl_filename']);}if(!file_exists($this->tpl['compiled_filename'])||(self::$check_template_update&&filemtime($this->tpl['compiled_filename'])<filemtime($this->tpl['tpl_filename']))){$this->compileFile($tpl_basename,$tpl_basedir,$this->tpl['tpl_filename'],self::$cache_dir,$this->tpl['compiled_filename']);return true;}$this->tpl['checked']=true;}}protected function xml_reSubstitution($capture){return "<?php echo '<?xml ".stripslashes($capture[1])." ?>'; ?>";}protected function compileFile($tpl_basename,$tpl_basedir,$tpl_filename,$cache_dir,$compiled_filename){$this->tpl['source']=$template_code=file_get_contents($tpl_filename);$template_code=preg_replace("/<\?xml(.*?)\?>/s","##XML\\1XML##",$template_code);if(!self::$php_enabled)$template_code=str_replace(array("<?","?>"),array("&lt;?","?&gt;"),$template_code);$template_code=preg_replace_callback("/##XML(.*?)XML##/s",array($this,'xml_reSubstitution'),$template_code);$template_compiled="<?php if(!class_exists('raintpl')){exit;}?>".$this->compileTemplate($template_code,$tpl_basedir);$template_compiled=str_replace("?>\n","?>\n\n",$template_compiled);if(!is_dir($cache_dir))mkdir($cache_dir,0755,true);if(!is_writable($cache_dir))throw new RainTpl_Exception('Cache directory '.$cache_dir.'doesn\'t have write permission. Set write permission or set RAINTPL_CHECK_TEMPLATE_UPDATE to false. More details on http://www.raintpl.com/Documentation/Documentation-for-PHP-developers/Configuration/');file_put_contents($compiled_filename,$template_compiled);}protected function compileTemplate($template_code,$tpl_basedir){$tag_regexp=array('loop'=>'(\{loop(?: name){0,1}="\${0,1}[^"]*"\})','loop_close'=>'(\{\/loop\})','if'=>'(\{if(?: condition){0,1}="[^"]*"\})','elseif'=>'(\{elseif(?: condition){0,1}="[^"]*"\})','else'=>'(\{else\})','if_close'=>'(\{\/if\})','function'=>'(\{function="[^"]*"\})','noparse'=>'(\{noparse\})','noparse_close'=>'(\{\/noparse\})','ignore'=>'(\{ignore\}|\{\*)','ignore_close'=>'(\{\/ignore\}|\*\})','include'=>'(\{include="[^"]*"(?: cache="[^"]*")?\})','template_info'=>'(\{\$template_info\})','function'=>'(\{function="(\w*?)(?:.*?)"\})');$tag_regexp="/".join("|",$tag_regexp)."/";$template_code=preg_split($tag_regexp,$template_code,-1,PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);$template_code=$this->path_replace($template_code,$tpl_basedir);$compiled_code=$this->compileCode($template_code);return $compiled_code;}protected function compileCode($parsed_code){$compiled_code=$open_if=$comment_is_open=$ignore_is_open=null;$loop_level=0;while($html=array_shift($parsed_code)){if(!$comment_is_open&&(strpos($html,'{/ignore}')!==false||strpos($html,'*}')!==false))$ignore_is_open=false;elseif($ignore_is_open){}elseif(strpos($html,'{/noparse}')!==false)$comment_is_open=false;elseif($comment_is_open)$compiled_code.=$html;elseif(strpos($html,'{ignore}')!==false||strpos($html,'{*')!==false)$ignore_is_open=true;elseif(strpos($html,'{noparse}')!==false)$comment_is_open=true;elseif(preg_match('/\{include="([^"]*)"(?: cache="([^"]*)"){0,1}\}/',$html,$code)){$include_var=$this->var_replace($code[1],$left_delimiter=null,$right_delimiter=null,$php_left_delimiter='".',$php_right_delimiter='."',$loop_level);if(isset($code[2])){$compiled_code.='<?php $tpl = new '.get_class($this).';'.'if( $cache = $tpl->cache( $template = basename("'.$include_var.'") ) )'.'	echo $cache;'.'else{'.'	$tpl_dir_temp = self::$tpl_dir;'.'	$tpl->assign( $this->var );'.(!$loop_level?null:'$tpl->assign( "key", $key'.$loop_level.' ); $tpl->assign( "value", $value'.$loop_level.' );').'	$tpl->draw( dirname("'.$include_var.'") . ( substr("'.$include_var.'",-1,1) != "/" ? "/" : "" ) . basename("'.$include_var.'") );'.'} ?>';}else{$compiled_code.='<?php $tpl = new '.get_class($this).';'.'$tpl_dir_temp = self::$tpl_dir;'.'$tpl->assign( $this->var );'.(!$loop_level?null:'$tpl->assign( "key", $key'.$loop_level.' ); $tpl->assign( "value", $value'.$loop_level.' );').'$tpl->draw( dirname("'.$include_var.'") . ( substr("'.$include_var.'",-1,1) != "/" ? "/" : "" ) . basename("'.$include_var.'") );'.'?>';}}elseif(preg_match('/\{loop(?: name){0,1}="\${0,1}([^"]*)"\}/',$html,$code)){$loop_level++;$var=$this->var_replace('$'.$code[1],$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level-1);$counter="\$counter$loop_level";$key="\$key$loop_level";$value="\$value$loop_level";$compiled_code.="<?php $counter=-1; if( isset($var) && is_array($var) && sizeof($var) ) foreach( $var as $key => $value ){ $counter++; ?>";}elseif(strpos($html,'{/loop}')!==false){$counter="\$counter$loop_level";$loop_level--;$compiled_code.="<?php } ?>";}elseif(preg_match('/\{if(?: condition){0,1}="([^"]*)"\}/',$html,$code)){$open_if++;$tag=$code[0];$condition=$code[1];$this->function_check($tag);$parsed_condition=$this->var_replace($condition,$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php if( $parsed_condition ){ ?>";}elseif(preg_match('/\{elseif(?: condition){0,1}="([^"]*)"\}/',$html,$code)){$tag=$code[0];$condition=$code[1];$parsed_condition=$this->var_replace($condition,$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php }elseif( $parsed_condition ){ ?>";}elseif(strpos($html,'{else}')!==false){$compiled_code.='<?php }else{ ?>';}elseif(strpos($html,'{/if}')!==false){$open_if--;$compiled_code.='<?php } ?>';}elseif(preg_match('/\{function="(\w*)(.*?)"\}/',$html,$code)){$tag=$code[0];$function=$code[1];$this->function_check($tag);if(empty($code[2]))$parsed_function=$function."()";else $parsed_function=$function.$this->var_replace($code[2],$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php echo $parsed_function; ?>";}elseif(strpos($html,'{$template_info}')!==false){$tag='{$template_info}';$compiled_code.='<?php echo "<pre>"; print_r( $this->var ); echo "</pre>"; ?>';}else{$html=$this->var_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);$html=$this->const_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);$compiled_code.=$this->func_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);}}if($open_if>0){$e=new RainTpl_SyntaxException('Error! You need to close an {if} tag in '.$this->tpl['tpl_filename'].' template');throw $e->setTemplateFile($this->tpl['tpl_filename']);}return $compiled_code;}protected function reduce_path($path){$path=str_replace("://","@not_replace@",$path);$path=str_replace("//","/",$path);$path=str_replace("@not_replace@","://",$path);return preg_replace('/\w+\/\.\.\//','',$path);}protected function path_replace($html,$tpl_basedir){if(self::$path_replace){$tpl_dir=self::$base_url.self::$tpl_dir.$tpl_basedir;$path=$this->reduce_path($tpl_dir);$exp=$sub=array();if(in_array("img",self::$path_replace_list)){$exp=array('/<img(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<img(.*?)src=(?:")([^"]+?)#(?:")/i','/<img(.*?)src="(.*?)"/','/<img(.*?)src=(?:\@)([^"]+?)(?:\@)/i');$sub=array('<img$1src=@$2://$3@','<img$1src=@$2@','<img$1src="'.$path.'$2"','<img$1src="$2"');}if(in_array("script",self::$path_replace_list)){$exp=array_merge($exp,array('/<script(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<script(.*?)src=(?:")([^"]+?)#(?:")/i','/<script(.*?)src="(.*?)"/','/<script(.*?)src=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<script$1src=@$2://$3@','<script$1src=@$2@','<script$1src="'.$path.'$2"','<script$1src="$2"'));}if(in_array("link",self::$path_replace_list)){$exp=array_merge($exp,array('/<link(.*?)href=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<link(.*?)href=(?:")([^"]+?)#(?:")/i','/<link(.*?)href="(.*?)"/','/<link(.*?)href=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<link$1href=@$2://$3@','<link$1href=@$2@','<link$1href="'.$path.'$2"','<link$1href="$2"'));}if(in_array("a",self::$path_replace_list)){$exp=array_merge($exp,array('/<a(.*?)href=(?:")(http\:\/\/|https\:\/\/|javascript:)([^"]+?)(?:")/i','/<a(.*?)href="(.*?)"/','/<a(.*?)href=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<a$1href=@$2$3@','<a$1href="'.self::$base_url.'$2"','<a$1href="$2"'));}if(in_array("input",self::$path_replace_list)){$exp=array_merge($exp,array('/<input(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<input(.*?)src=(?:")([^"]+?)#(?:")/i','/<input(.*?)src="(.*?)"/','/<input(.*?)src=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<input$1src=@$2://$3@','<input$1src=@$2@','<input$1src="'.$path.'$2"','<input$1src="$2"'));}return preg_replace($exp,$sub,$html);}else return $html;}function const_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){return preg_replace('/\{\#(\w+)\#{0,1}\}/',$php_left_delimiter.($echo?" echo ":null).'\\1'.$php_right_delimiter,$html);}function func_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){preg_match_all('/'.'\{\#{0,1}(\"{0,1}.*?\"{0,1})(\|\w.*?)\#{0,1}\}'.'/',$html,$matches);for($i=0,$n=count($matches[0]);$i<$n;$i++){$tag=$matches[0][$i];$var=$matches[1][$i];$extra_var=$matches[2][$i];$this->function_check($tag);$extra_var=$this->var_replace($extra_var,null,null,null,null,$loop_level);$is_init_variable=preg_match("/^(\s*?)\=[^=](.*?)$/",$extra_var);$function_var=($extra_var and $extra_var[0]=='|')?substr($extra_var,1):null;$temp=preg_split("/\.|\[|\-\>/",$var);$var_name=$temp[0];$variable_path=substr($var,strlen($var_name));$variable_path=str_replace('[','["',$variable_path);$variable_path=str_replace(']','"]',$variable_path);$variable_path=preg_replace('/\.\$(\w+)/','["$\\1"]',$variable_path);$variable_path=preg_replace('/\.(\w+)/','["\\1"]',$variable_path);if($function_var){$function_var=str_replace("::","@double_dot@",$function_var);if($dot_position=strpos($function_var,":")){$function=substr($function_var,0,$dot_position);$params=substr($function_var,$dot_position+1);}else{$function=str_replace("@double_dot@","::",$function_var);$params=null;}$function=str_replace("@double_dot@","::",$function);$params=str_replace("@double_dot@","::",$params);}else $function=$params=null;$php_var=$var_name.$variable_path;if(isset($function)){if($php_var)$php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $php_var, $params ) )":"$function( $php_var )").$php_right_delimiter;else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $params ) )":"$function()").$php_right_delimiter;}else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).$php_var.$extra_var.$php_right_delimiter;$html=str_replace($tag,$php_var,$html);}return $html;}function var_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){if(preg_match_all('/'.$tag_left_delimiter.'\$(\w+(?:\.\${0,1}[A-Za-z0-9_]+)*(?:(?:\[\${0,1}[A-Za-z0-9_]+\])|(?:\-\>\${0,1}[A-Za-z0-9_]+))*)(.*?)'.$tag_right_delimiter.'/',$html,$matches)){for($parsed=array(),$i=0,$n=count($matches[0]);$i<$n;$i++)$parsed[$matches[0][$i]]=array('var'=>$matches[1][$i],'extra_var'=>$matches[2][$i]);foreach($parsed as $tag=>$array){$var=$array['var'];$extra_var=$array['extra_var'];$this->function_check($tag);$extra_var=$this->var_replace($extra_var,null,null,null,null,$loop_level);$is_init_variable=preg_match("/^[a-z_A-Z\.\[\](\-\>)]*=[^=]*$/",$extra_var);$function_var=($extra_var and $extra_var[0]=='|')?substr($extra_var,1):null;$temp=preg_split("/\.|\[|\-\>/",$var);$var_name=$temp[0];$variable_path=substr($var,strlen($var_name));$variable_path=str_replace('[','["',$variable_path);$variable_path=str_replace(']','"]',$variable_path);$variable_path=preg_replace('/\.(\${0,1}\w+)/','["\\1"]',$variable_path);if($is_init_variable)$extra_var="=\$this->var['{$var_name}']{$variable_path}".$extra_var;if($function_var){$function_var=str_replace("::","@double_dot@",$function_var);if($dot_position=strpos($function_var,":")){$function=substr($function_var,0,$dot_position);$params=substr($function_var,$dot_position+1);}else{$function=str_replace("@double_dot@","::",$function_var);$params=null;}$function=str_replace("@double_dot@","::",$function);$params=str_replace("@double_dot@","::",$params);}else $function=$params=null;if($loop_level){if($var_name=='key')$php_var='$key'.$loop_level;elseif($var_name=='value')$php_var='$value'.$loop_level.$variable_path;elseif($var_name=='counter')$php_var='$counter'.$loop_level;else $php_var='$'.$var_name.$variable_path;}else $php_var='$'.$var_name.$variable_path;if(isset($function))$php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $php_var, $params ) )":"$function( $php_var )").$php_right_delimiter;else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).$php_var.$extra_var.$php_right_delimiter;$html=str_replace($tag,$php_var,$html);}}return $html;}protected function function_check($code){$preg='#(\W|\s)'.implode('(\W|\s)|(\W|\s)',self::$black_list).'(\W|\s)#';if(count(self::$black_list)&&preg_match($preg,$code,$match)){$line=0;$rows=explode("\n",$this->tpl['source']);while(!strpos($rows[$line],$code))$line++;$e=new RainTpl_SyntaxException('Unallowed syntax in '.$this->tpl['tpl_filename'].' template');throw $e->setTemplateFile($this->tpl['tpl_filename'])->setTag($code)->setTemplateLine($line);}}protected function printDebug(RainTpl_Exception $e){if(!self::$debug){throw $e;}$output=sprintf('<h2>Exception: %s</h2><h3>%s</h3><p>template: %s</p>',get_class($e),$e->getMessage(),$e->getTemplateFile());if($e instanceof RainTpl_SyntaxException){if(null!=$e->getTemplateLine()){$output.='<p>line: '.$e->getTemplateLine().'</p>';}if(null!=$e->getTag()){$output.='<p>in tag: '.htmlspecialchars($e->getTag()).'</p>';}if(null!=$e->getTemplateLine()&&null!=$e->getTag()){$rows=explode("\n",htmlspecialchars($this->tpl['source']));$rows[$e->getTemplateLine()]='<font color=red>'.$rows[$e->getTemplateLine()].'</font>';$output.='<h3>template code</h3>'.implode('<br />',$rows).'</pre>';}}$output.=sprintf('<h3>trace</h3><p>In %s on line %d</p><pre>%s</pre>',$e->getFile(),$e->getLine(),nl2br(htmlspecialchars($e->getTraceAsString())));return $output;}}class RainTpl_Exception extends Exception{protected $templateFile='';public function getTemplateFile(){return $this->templateFile;}public function setTemplateFile($templateFile){$this->templateFile=(string) $templateFile;return $this;}}class RainTpl_NotFoundException extends RainTpl_Exception{}class RainTpl_SyntaxException extends RainTpl_Exception{protected $templateLine=null;protected $tag=null;public function getTemplateLine(){return $this->templateLine;}public function setTemplateLine($templateLine){$this->templateLine=(int) $templateLine;return $this;}public function getTag(){return $this->tag;}public function setTag($tag){$this->tag=(string) $tag;return $this;}}
  
/*
 * String class (adapted from Laravel)
 */
class StringHelper {
public static function slug($title, $separator = '-') { $title = static::ascii($title); $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', static::lower($title)); $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title); return trim($title, $separator); } public static function ascii($value) { $foreign = array('/æ|ǽ/' => 'ae', '/œ/' => 'oe', '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|А/' => 'A', '/à|á|â|ã|ä|å|ǻ|ā|ă|ą|ǎ|ª|а/' => 'a', '/Б/' => 'B', '/б/' => 'b', '/Ç|Ć|Ĉ|Ċ|Č|Ц/' => 'C', '/ç|ć|ĉ|ċ|č|ц/' => 'c', '/Ð|Ď|Đ|Д/' => 'Dj', '/ð|ď|đ|д/' => 'dj', '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Е|Ё|Э/' => 'E', '/è|é|ê|ë|ē|ĕ|ė|ę|ě|е|ё|э/' => 'e', '/Ф/' => 'F', '/ƒ|ф/' => 'f', '/Ĝ|Ğ|Ġ|Ģ|Г/' => 'G', '/ĝ|ğ|ġ|ģ|г/' => 'g', '/Ĥ|Ħ|Х/' => 'H', '/ĥ|ħ|х/' => 'h', '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|И/' => 'I', '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|и/' => 'i', '/Ĵ|Й/' => 'J', '/ĵ|й/' => 'j', '/Ķ|К/' => 'K', '/ķ|к/' => 'k', '/Ĺ|Ļ|Ľ|Ŀ|Ł|Л/' => 'L', '/ĺ|ļ|ľ|ŀ|ł|л/' => 'l', '/М/' => 'M', '/м/' => 'm', '/Ñ|Ń|Ņ|Ň|Н/' => 'N', '/ñ|ń|ņ|ň|ŉ|н/' => 'n', '/Ö|Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|О/' => 'O', '/ö|ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|о/' => 'o', '/П/' => 'P', '/п/' => 'p', '/Ŕ|Ŗ|Ř|Р/' => 'R', '/ŕ|ŗ|ř|р/' => 'r', '/Ś|Ŝ|Ş|Ș|Š|С/' => 'S', '/ś|ŝ|ş|ș|š|ſ|с/' => 's', '/Ţ|Ț|Ť|Ŧ|Т/' => 'T', '/ţ|ț|ť|ŧ|т/' => 't', '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ü|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|У/' => 'U', '/ù|ú|û|ũ|ū|ŭ|ů|ü|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|у/' => 'u', '/В/' => 'V', '/в/' => 'v', '/Ý|Ÿ|Ŷ|Ы/' => 'Y', '/ý|ÿ|ŷ|ы/' => 'y', '/Ŵ/' => 'W', '/ŵ/' => 'w', '/Ź|Ż|Ž|З/' => 'Z', '/ź|ż|ž|з/' => 'z', '/Æ|Ǽ/' => 'AE', '/ß/'=> 'ss', '/Ĳ/' => 'IJ', '/ĳ/' => 'ij', '/Œ/' => 'OE', '/Ч/' => 'Ch', '/ч/' => 'ch', '/Ю/' => 'Ju', '/ю/' => 'ju', '/Я/' => 'Ja', '/я/' => 'ja', '/Ш/' => 'Sh', '/ш/' => 'sh', '/Щ/' => 'Shch', '/щ/' => 'shch', '/Ж/' => 'Zh', '/ж/' => 'zh' ); $value = preg_replace(array_keys($foreign),  array_values($foreign), $value); return preg_replace('/[^\x09\x0A\x0D\x20-\x7E]/', '', $value); } public static function lower($value) { return (function_exists('mb_get_info')) ? mb_strtolower($value, 'UTF-8') : strtolower($value); }
public static function pluralize($word, $quantity, $suffix = 's') { return $word.($quantity>1 ? $suffix : ''); }
}
  
/*
* Book and database
*/
class Book {
  const SEEN = true;
  const NOT_SEEN = null;
}

class Books implements Iterator, Countable, ArrayAccess {
  private $data;
  private $keys;
  private $current;
  private $logged;
  public $total_not_seen = 0;
  public $total_seen = 0;
  public $total_search = 0;
  public $total_genre = 0;
  
  function __construct($logged = false) {
    $this->logged = $logged;
    $this->check();
    $this->read();
  }
  
  // Countable interface implementation
  public function count() { return count($this->data); }
  
  // ArrayAccess interface implementation
  public function offsetSet($offset, $value) {
    if (!$this->logged) die('You are not authorized to add a book.');
    if (empty($value['id'])) die('Internal error: a book should always have an Id.');
    if (empty($offset)) die('You must specify a key.');
    $this->data[$offset] = $value;
  }
  public function offsetExists($offset) { return array_key_exists($offset,$this->data); }
  public function offsetUnset($offset) {
    if (!$this->logged) die('You are not authorized to delete a book.');
    unset($this->data[$offset]);
  }
  public function offsetGet($offset) { return isset($this->data[$offset]) ? $this->data[$offset] : null; }
  
  // Iterator interface implementation
  function rewind() { $this->keys=array_keys($this->data); rsort($this->keys); $this->current=0; }
  function key() { return $this->keys[$this->current]; }
  function current() { return $this->data[$this->keys[$this->current]]; }
  function next() { ++$this->current; }
  function valid() { return isset($this->keys[$this->current]); }
  
  // Check if db directory and file exists
  private function check() {
    global $_CONFIG;
    if (!file_exists($_CONFIG['file_database']))  {
      $this->data = array(
        1375621919 => ['id' => 1375621919, 'title' => 'Le Petit Prince', 'collection' => 'Folio', 'publication_year' => 1999, 'author' => 'Antoine de Saint-Exupéry', 'publisher' => 'Gallimard', 'country' => 'fr', 'genre' => 'Littérature française', 'summary' => '« J’ai ainsi vécu seul, sans personne avec qui parler véritablement, jusqu’à une panne dans le désert du Sahara, il y a six ans. Quelque chose s’était cassé dans mon moteur. Et comme je n’avais avec moi ni mécanicien, ni passagers, je me préparai à essayer de réussir, tout seul, une réparation difficile. C’était pour moi une question de vie ou de mort. J’avais à peine de l’eau à boire pour huit jours.<br>Le premier soir je me suis donc endormi sur le sable à mille milles de toute terre habitée. J’étais bien plus isolé qu’un naufragé sur un radeau au milieu de l’océan. Alors vous imaginez ma surprise, au lever du jour, quand une drôle de petite voix m’a réveillé. Elle disait : … »', 'link_image' => 'images/1375621919.jpg', 'link_website' => 'http://www.gallimard.fr/Catalogue/GALLIMARD/Folio/Folio/Le-Petit-Prince', 'isbn' => '9782070408504', 'pages' => 120, 'status' => Book::SEEN, 'note' => 5, 'review' => 'Beautiful. No other word.', 'read_date' => date('Y-m-d')],
        1375621920 => ['id' => 1375621920, 'title' => ' Vol de nuit ', 'collection' => 'Folio', 'publication_year' => 1972, 'author' => 'Antoine de Saint-Exupéry', 'publisher' => 'Gallimard', 'country' => 'fr', 'genre' => 'Littérature française', 'summary' => '« Ainsi les trois avions postaux de la Patagonie, du Chili et du Paraguay revenaient du sud, de l’ouest et du nord vers Buenos Aires. On y attendait leur chargement pour donner le départ, vers minuit, à l’avion d’Europe.<br>Trois pilotes, chacun à l’arrière d’un capot lourd comme un chaland, perdus dans la nuit, méditaient leur vol, et, vers la ville immense, descendraient lentement de leur ciel d’orage ou de paix, comme d’étranges paysans descendent de leurs montagnes.<br>Rivière, responsable du réseau entier, se promenait de long en large sur le terrain d’atterrissage de Buenos Aires. Il demeurait silencieux car, jusqu’à l’arrivée des trois avions, cette journée, pour lui, restait redoutable… »', 'link_image' => 'images/1375621920.jpg', 'link_website' => 'http://www.gallimard.fr/Catalogue/GALLIMARD/Folio/Folio/Vol-de-nuit', 'isbn' => '9782070360048', 'pages' => 192, 'status' => Book::NOT_SEEN, 'note' => null]
      );
      file_put_contents($_CONFIG['file_database'], PHPPREFIX.base64_encode(gzdeflate(serialize($this->data))).PHPSUFFIX);
      $this->RSS();
    }
  }
  
  // Read database from disk to memory
  private function read() {
    global $_CONFIG;
    $this->data=(file_exists($_CONFIG['file_database']) ? unserialize(gzinflate(base64_decode(substr(file_get_contents($_CONFIG['file_database']),strlen(PHPPREFIX),-strlen(PHPSUFFIX))))) : array() );
  }
  
  // Save database from memory to disk
  public function save() {
    global $_CONFIG;
    if (!$this->logged) die('You are not authorized to change the database.');
    krsort($this->data);
    file_put_contents($_CONFIG['file_database'], PHPPREFIX.base64_encode(gzdeflate(serialize($this->data))).PHPSUFFIX);
    $this->RSS();
  }
  
  // Return all books
  public function all() {
    krsort($this->data);
    return $this->data;
  }

  // Random book
  public function random() {
    return $this->data[array_rand($this->data)];
  }
  
  // Last books inserted
  public function lastBooks($begin = 0, $end = PAGINATION) {
    krsort($this->data);
    return array_slice($this->data, $begin, $end, true);
  }
  
  // Return sorted books by status (only not seen returned)
  public function byStatus($begin = 0, $end = PAGINATION) {
    $sorted = array();
    foreach ($this->data as $id => $book) {
      if ($book['status'] == Book::NOT_SEEN) { $sorted[$id] = $book; }
    }
    krsort($sorted);
    $this->total_not_seen = sizeof($sorted);
    return array_slice($sorted, $begin, $end, true);
  }
  
  // Return sorted books by note (and then id desc) (only seen i.e. with a note returned)
  public function byNote($begin = 0, $end = PAGINATION) {
    $sorted = array();
    foreach ($this->data as $id => $book) {
      if ($book['status'] == Book::SEEN && $book['note'] >= 4) { $sorted[$id] = $book; }
    }
    $this->total_seen = sizeof($sorted);
    $values = array();
    foreach ($sorted as $key => $value) { $values[$key] = $value['note']; }
    $keys = array_keys($sorted);
    array_multisort($values, SORT_DESC, $keys, SORT_DESC, $sorted);
    return array_slice($sorted, $begin, $end, true);
  }
  
  // function to get only books with a genre given
  public function byGenre($genre, $begin = 0, $end = PAGINATION) {
    $result = array();
    $genre = mb_convert_case(htmlspecialchars($genre), MB_CASE_LOWER, "UTF-8");
    foreach($this->data as $m) {
      if (strpos(mb_convert_case($m['genre'], MB_CASE_LOWER, "UTF-8"), $genre)!==false)
      { $result[$m['id']] = $m; }
    }
    krsort($result);
    $this->total_genre = sizeof($result);
    return array_slice($result, $begin, $end, true);
  }
  
  // Search function (case no sensitive). Currently: search exact whole expression
  public function search($term, $begin = 0, $end = PAGINATION) {
    $result = array();
    $s = mb_convert_case(htmlspecialchars($term), MB_CASE_LOWER, "UTF-8");
    foreach($this->data as $m) {
      $found =   (strpos(mb_convert_case($m['title'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
      || (strpos(mb_convert_case($m['author'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
      || (strpos(mb_convert_case($m['summary'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
      || (strpos(mb_convert_case($m['genre'], MB_CASE_LOWER, "UTF-8"),$s)!==false);
      if ($found) $result[$m['id']] = $m;
    }
    krsort($result);
    $this->total_search = sizeof($result);
    return array_slice($result, $begin, $end, true);
  }
  
  // Get next book if existing
  public function nextBook($current_id) {
    if (array_key_exists($current_id, $this->data)) {
      while(key($this->data) !== $current_id) next($this->data);
      $result = next($this->data);
      reset($this->data);
      return $result;
    }
    return false;
  }
  // Get previous book if existing
  public function previousBook($current_id) {
    if (array_key_exists($current_id, $this->data)) {
      while(key($this->data) !== $current_id) next($this->data);
      $result = prev($this->data);
      reset($this->data);
      return $result;
    }
    return false;
  }
  
  // Return the full URL for the book image
  public static function FullImageUrl($book)
  {
    global $_CONFIG;
    $img = !empty($book['link_image']) ? $book['link_image'] : $_CONFIG['default_image'];
    // if img is hosted in local, we have to add server URL
    if (substr($img, 0, strlen($_CONFIG['dir_images'].'/')) === $_CONFIG['dir_images'].'/') { $img = BASE_URL.$img; }
    
    return $img;
  }
  // Return if a book image is self hosted
  public static function IsSelfHostedImage($image_path)
  {
    global $_CONFIG;
    return (substr(substr($image_path, strlen(BASE_URL)), 0, strlen($_CONFIG['dir_images'].'/')) === $_CONFIG['dir_images'].'/');
  }
  
  // Write an RSS file with the books $data given
  private function updateRSS($data) {
    global $_CONFIG;
    $xml  = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
    $xml .= '<rss version="2.0"  xmlns:atom="http://www.w3.org/2005/Atom">'.PHP_EOL;
    $xml .= '<channel>'.PHP_EOL;
    $xml .= '<atom:link href="'.BASE_URL.RSS.'" rel="self" type="application/rss+xml" />'.PHP_EOL;
    $xml .= '<title>'.TITLE.'</title>'.PHP_EOL;
    $xml .= '<link>'.BASE_URL.'</link>'.PHP_EOL;
    $xml .= '<description>RSS feed of '.TITLE.'</description>'.PHP_EOL;
    $xml .= '<pubDate>'.date("D, d M Y H:i:s O").'</pubDate>'.PHP_EOL;
    $xml .= '<copyright>©'.date('Y').' — '.AUTHOR.'</copyright>'.PHP_EOL;
    $xml .= '<generator>'.BOOKS.' (v'.BOOKS_VERSION.') by Nicolas Devenet</generator>'.PHP_EOL;
    $xml .= '<image>'.PHP_EOL;
    $xml .= '<title>'.TITLE.'</title>'.PHP_EOL;
    $xml .= '<url>'.BASE_URL.THEME.'/favicon/apple-touch-icon.png</url>'.PHP_EOL;
    $xml .= '<link>'.BASE_URL.'</link>'.PHP_EOL;
    $xml .= '<width>180</width>'.PHP_EOL;
    $xml .= '<height>180</height>'.PHP_EOL;
    $xml .= '</image>'.PHP_EOL;
    foreach ($data as $id => $book) {
      $xml .= '<item>'.PHP_EOL;
      $xml .= '<title>'. $book['title'] .'</title>'.PHP_EOL;
      $xml .= '<link>'.BASE_URL.substr(Path::Book($book['id']), 2).'</link>'.PHP_EOL;
      $xml .= '<description><![CDATA[<p><strong>'.displayAuthors($book['author']).'</strong><br>'.($book['status']==Book::SEEN ? 'Book read &middot; Rated '.$book['note'].'/5' : 'Book not read').'</p><p>'.htmlspecialchars_decode(htmlentities($book['summary'], ENT_COMPAT, 'UTF-8')).'</p>]]></description>'.PHP_EOL;
      $image_path = Books::FullImageUrl($book);
      $xml .= '<enclosure url="'.$image_path.'" ';
      if (Books::IsSelfHostedImage($image_path)) { $xml .= 'length="'.filesize(substr($image_path, strlen(BASE_URL))).'" '; }
      $xml .= 'type="image/jpeg" />'.PHP_EOL;
      $xml .= '<guid isPermaLink="false">'.$book['id'].'</guid>'.PHP_EOL;
      $xml .= '<pubDate>'.date("D, d M Y H:i:s O", $book['id']).'</pubDate>'.PHP_EOL;
      if (!empty($book['genre'])) {
        foreach (explode(',', $book['genre']) as $genre) {
          $xml .= '<category domain="'.BASE_URL.'?genre='.trim(mb_convert_case($genre, MB_CASE_LOWER, "UTF-8")).'">'.trim(mb_convert_case($genre, MB_CASE_TITLE, "UTF-8")).'</category>'.PHP_EOL;
        }
      }
      $xml .= '</item>'.PHP_EOL;
    }
    $xml .= '</channel>'.PHP_EOL;
    $xml .= '</rss>'.PHP_EOL;

    file_put_contents(RSS, $xml);
  }
  
  public function RSS() {
    global $_CONFIG;
    $this->updateRSS($this->lastBooks(0, $_CONFIG['pagination_rss']));
  }
  
  // Export books datas into json
  public function export($privateDatas = true, $exportImages = false, array $booksIdToExport = null) {
    $books = new Books();
    if($booksIdToExport == null){
      $booksIdToExport = array();
      foreach($books as $book){
        array_push($booksIdToExport, $book['id']);
      }
    }
    $booksToExport = array();
    $imagesDatas = array();
    $i = 0;
    foreach($booksIdToExport as $id){
      if(isset($books[$id])){
        $booksToExport[$i] = $books[$id];
        if(!$privateDatas){
          $booksToExport[$i]['status'] = null;
          $booksToExport[$i]['note'] = null;
        }
        if($exportImages){
          if(empty($books[$id]['link_image'])){
            $imagesDatas[$i] = null;
          }
          else{
            $type = pathinfo($books[$id]['link_image'], PATHINFO_EXTENSION);
            $data = file_get_contents($books[$id]['link_image']);
            $imagesDatas[$i] = 'data:image/'.$type.';base64,'.base64_encode($data);
          }
        }
        $i++;
      }
    }
    return json_encode(array('books' => $booksToExport, 'posters' => $imagesDatas));
  }
  
  // Import books datas from json
  public static function Import($jsonDatas, $keep_ids = false, $logged = false){
    global $_CONFIG;
    
    if (!$logged) die('You are not authorized to import books.');
    
    $datas = json_decode($jsonDatas, true);
    if(!isset($datas['books']) || !isset($datas['posters'])){
      return false;
    }
    $booksDatas = $datas['books'];
    $images = $datas['posters'];
    $id = time();
    $i = 0;
    $books = new Books($logged);
    foreach($booksDatas as $book){
      $id = $keep_ids && isset($book['id']) ? $book['id'] : $id;
      while(isset($books[$id])){
        $id--;
      }
      $input_status = ((isset($book['status']) && $book['status'] != null) ? Book::SEEN : null);
      $inputs = array(
        'id' => $id,
        'title' => (isset($book['title']) ? trim(self::html_escaped($book['title'])) : null),
        'author' => (isset($book['author']) ? trim(self::html_escaped($book['author'])) : null),
        'summary' => (isset($book['summary']) ? keepHtmlNewline(preg_replace('#<br( /)?>#', '', $book['summary'])) : null),
        'publisher' => (isset($book['publisher']) ? trim(self::html_escaped($book['publisher'])) : null),
        'status' => $input_status,
        'note' => (isset($book['note']) ? checkRatingNote($book['note'], $input_status) : null),
        'read_date' => (isset($book['read_date']) ? checkInputReadDate($book['read_date'], $input_status) : null),
        'review' => (isset($book['review']) ? checkReview(preg_replace('#<br( /)?>#', '', $book['review']), $input_status) : null),
        'genre' => (isset($book['genre']) ? checkGenre($book['genre']) : null),
        'publication_year' => (isset($book['release_date']) ? checkInputPublicationYear($book['release_date'], $input_status) : null),
        'pages' => (isset($book['pages']) ? checkPages($book['pages']) : null),
        'country' => (isset($book['country']) ? checkCountry($book['country']) : null),
        'link_website' => (isset($book['link_website']) ? checkLink($book['link_website']) : null),
        'link_image' => null
      );
      if(empty($inputs['title']) && empty($inputs['author']) && empty($inputs['summary'])) { continue; }
      if(function_exists('imagecreatefromjpeg') && !empty($images[$i])) {
        $image = explode(',', $images[$i]);
        if(!isset($image[1])){ continue; }
        $imported = file_put_contents($_CONFIG['dir_images'].'/'.$id.'.jpg', base64_decode($image[1]));
        if ($imported == false){ continue; }
        $inputs['link_image'] = $_CONFIG['dir_images'].'/'.$id.'.jpg';
      }
      $books[$id] = $inputs;
      $i++;
    }
    $books->save();
    return true;
  }
  // Escapes < and > (inspired by Sebastien Sauvage with Shaarli)
  private static function html_escaped($html) {
    return str_replace('>','&gt;',str_replace('<','&lt;',$html));
  }
}

/*
 * Session managment (inspirated from Shaarli by Sébastien Sauvage)
 */

// Get state if user is logged in or not
function isLogged() {
  global $_CONFIG;
  if (!isset($_CONFIG['login'])) { return false; }
  // If session does not exist on server side, or IP address has changed, or session has expired, logout.
  if (empty($_SESSION['uid']) || $_SESSION['ip'] != currentIP() || time() >= $_SESSION['expires_on']) {
    logout();
    return false;
  }
  $_SESSION['expires_on'] = time() + INACTIVITY_TIMEOUT;
  return true;
}

// Logout user
function logout() { if (isset($_SESSION)) { unset($_SESSION['uid']); unset($_SESSION['ip']); unset($_SESSION['expires_on']); } }

// Returns the IP address of the client (Used to prevent session cookie hijacking.)
function currentIP() {
  $ip = $_SERVER["REMOTE_ADDR"];
  // Then we use more HTTP headers to prevent session hijacking from users behind the same proxy
  if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip=$ip.'_'.$_SERVER['HTTP_X_FORWARDED_FOR']; }
  if (isset($_SERVER['HTTP_CLIENT_IP'])) { $ip=$ip.'_'.$_SERVER['HTTP_CLIENT_IP']; }
  return $ip;
}

// Check that user/password is correct.
function check_auth($login, $password) {
  global $_CONFIG;
  $hash = sha1($login.$password.$_CONFIG['salt']);
  if ($login == $_CONFIG['login'] && $hash == $_CONFIG['hash']) {
    $_SESSION['uid'] = sha1(uniqid('', true).'_'.mt_rand());
    $_SESSION['ip'] = currentIP();
    $_SESSION['expires_on'] = time() + INACTIVITY_TIMEOUT;
    writeLog('Successful login for user '.htmlspecialchars($login));
    return true;
  }
  writeLog('Failed login for user '.htmlspecialchars($login), true);
  return false;
}

// Token are attached to the session
if (!isset($_SESSION['tokens'])) $_SESSION['tokens']=array();

// Returns a token
function getToken() {
  $token = sha1(uniqid('',true).'_'.mt_rand());
  $_SESSION['tokens'][$token] = 1;
  return $token;
}

// Tells if a token is ok and destroy it in case of success
function acceptToken($token) {
  return true;
  if (isset($_SESSION['tokens'][$token])) {
    unset($_SESSION['tokens'][$token]);
    return true;
  }
  writeLog('Invalid security token given', true);
  return false;
}

// Several consecutive failed logins will ban the IP address for 1 hour.
include $_CONFIG['file_jail'];
// in case of failed login
function loginFailed() {
  global $_CONFIG;
  $ip = $_SERVER['REMOTE_ADDR'];
  $ban = $_CONFIG['ban_ip'];
  if (!isset($ban['failures'][$ip])) {$ban['failures'][$ip] = 0;}
  $ban['failures'][$ip]++;
  if ($ban['failures'][$ip] > ($_CONFIG['ban_after']-1)) {
    $ban['banned'][$ip] = time() + $_CONFIG['ban_duration'];
    writeLog('IP address banned from sign in', true);
  }
  $_CONFIG['ban_ip'] = $ban;
  file_put_contents($_CONFIG['file_jail'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, true).';'.PHP_EOL.'?>');
}

// Signals a successful login. Resets failed login counter.
function loginSucceeded() {
  global $_CONFIG;
  $ip = $_SERVER["REMOTE_ADDR"];
  $ban = $_CONFIG['ban_ip'];
  unset($ban['failures'][$ip]);
  unset($ban['banned'][$ip]);
  $_CONFIG['ban_ip'] = $ban;
  file_put_contents($_CONFIG['file_jail'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, true).';'.PHP_EOL.'?>');
}

// Checks if the user CAN login. If 'true', the user can try to login.
function canLogin() {
  global $_CONFIG;
  $ip = $_SERVER["REMOTE_ADDR"];
  $ban = $_CONFIG['ban_ip'];
  if (isset($ban['banned'][$ip])) {
    // User is banned. Check if the ban has expired:
    if ($ban['banned'][$ip] <= time()) {
      writeLog('Ban lifted from jail');
      unset($ban['failures'][$ip]);
      unset($ban['banned'][$ip]);
      file_put_contents($_CONFIG['file_jail'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, true).';'.PHP_EOL.'?>');
      return true;
    }
    return false;
  }
  return true;
}

/*
 * Toolbox functions
 */

// Save settings of users (ID, password, title)
function writeSettings() {
  global $_CONFIG;
  if (is_file($_CONFIG['file_settings']) && !isLogged()) die('You are not authorized to change config.');
  $file  = '<?php'.PHP_EOL;
  $file .= '$_CONFIG[\'login\']='.var_export($_CONFIG['login'], true).'; ';
  $file .= '$_CONFIG[\'hash\']='.var_export($_CONFIG['hash'], true).'; ';
  $file .= '$_CONFIG[\'salt\']='.var_export($_CONFIG['salt'], true).'; ';
  $file .= '$_CONFIG[\'title\']='.var_export($_CONFIG['title'], true).'; ';
  $file .= '$_CONFIG[\'author\']='.var_export($_CONFIG['author'], true).'; ';
  $file .= '$_CONFIG[\'robots\']='.var_export($_CONFIG['robots'], true).'; ';
  $file .= '$_CONFIG[\'theme\']='.var_export($_CONFIG['theme'], true).'; ';
  $file .= '$_CONFIG[\'pagination\']='.var_export($_CONFIG['pagination'], true).'; ';
  $file .= PHP_EOL.'?>';
  if (!file_put_contents($_CONFIG['file_settings'], $file)) die('Unable to write the configuration file. Please verify the application has rights to write on the folder.');
}

// Log actions into file
function writeLog($message, $alert = false) {
  global $_CONFIG;
  $log = strval(date('Y-m-d H:i:s')).' ['.$_SERVER["REMOTE_ADDR"].'] '.($alert ? '! ' : '  ').strval($message)."\n";
  file_put_contents($_CONFIG['file_logs'], $log, FILE_APPEND);
}

// Keep nl2br in a html content
function keepHtmlNewline($html) {
  return nl2br(htmlspecialchars($html));
}

// Check review
function checkReview($review, $status) {
  if ($status != Book::SEEN) { return null; }
  return keepHtmlNewline($review);
}

// Check if a given note is correct
function checkRatingNote($note, $status) {
  if ($status != Book::SEEN) { return null; }
  $note = (int) $note+0;
  if ($note >= 0 && $note <= 5)
    return $note;
  return 3;
}

// Check if pages input is a positif integer
function checkPages($pages) {
  $pages = (int) $pages+0;
  return ($pages > 0) ? $pages : null;
}

// Check if a date input is a date (but not if the date exists)
function checkInputReadDate($date, $status) {
  if ($status != Book::SEEN || empty($date)) { return null; }
  list($y, $m, $d) = explode('-', htmlspecialchars($date));
  $y = (int) $y+0; $m = (int) $m+0; $d = (int) $d+0;
  if (! $y > 0) { return null; }
  if (! ($m > 0 && $m <= 12)) { return null; }
  if (! ($d > 0 && $d <= 31)) { return null; }
  return implode('-', array($y, str_pad($m, 2, '0', STR_PAD_LEFT), str_pad($d, 2, '0', STR_PAD_LEFT)));
}

// Check if an year date input is an year
function checkInputPublicationYear($date, $status) {
  if ($status != Book::SEEN || empty($date)) { return null; }
  $y = (int) $date+0;
  return ($y > 0) ? $y : null;
}

// Check if country given is in list
function checkCountry($country) {
  if (empty($country) || $country == 'o') { return null; }
  global $_CONFIG;
  if (array_key_exists($country, $_CONFIG['countries'])) { return htmlspecialchars($country) ;}
  return null;
}

// Check if input is a link, and if protocol was added or not
function checkLink($url) {
  global $_CONFIG;
  if (empty($url)) { return null; }
  // In case of local link images/…
  if (substr( $url, 0, strlen($_CONFIG['dir_images'].'/') ) === $_CONFIG['dir_images'].'/') { return $url; }
  $scheme = parse_url(htmlspecialchars($url), PHP_URL_SCHEME);
  $url = preg_replace('#https?://#', '', htmlspecialchars($url));
  return (!empty($scheme) ? $scheme : 'http').'://'.$url;
}

function checkGenre($genre) {
  return trim(mb_convert_case(htmlspecialchars($genre), MB_CASE_TITLE, "UTF-8"));
}

function importImage($url, $id) {
  global $_CONFIG;
  
  if (!function_exists('imagecreatefromjpeg')) { return null; }
  
  $tmp = $_CONFIG['dir_images'].'/temp.jpg';
  $output = $_CONFIG['dir_images'].'/'.$id;
  $width = 160;
  $height = 210;
  
  $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
  $allowed_mime = array('image/jpeg', 'image/png', 'image/gif');
  
  $infos = @getimagesize($url);
  if ($infos == false) { throw new \Exception('The URL given is not an image or the file is not found.'); }
  
  $mime = $infos['mime'];
  $ext = pathinfo($url, PATHINFO_EXTENSION);
  
  if (!in_array($mime, $allowed_mime) || !in_array($ext, $allowed_ext)) { throw new \Exception('The MIME type or the extension of the image is not allowed.'); }
  
  $img = @file_get_contents($url);
  $imported = file_put_contents($tmp, $img);
  if ($imported == false) { throw new \Exception('Unable to import image.'); }
  
  if ($ext == 'png') { $src = imagecreatefrompng($tmp); }
  else { $src = imagecreatefromjpeg($tmp); }
  unlink($tmp);
  
  $thumb = imagecreatetruecolor($width, $height);
  imagecopyresampled($thumb, $src, 0, 0, 0, 0, $width, $height, imagesx($src), imagesy($src));
  $result = imagejpeg($thumb, $output.'.jpg');
  if ($result == false) {  throw new \Exception('Unable to resize image.'); }
}
    
// Be sure pagination exists otherwise display 404 or homepage
function checkPagination($page, $total) {
  $page = (int) $page+0;
  if ($page <= 0) { header('Location: ./'); exit; }
  $pages = ceil($total/PAGINATION);
  if ($page <= $pages) { return true; }
  notFound();
}
    
function parseRobots($index, $follow, $archive) {
  $result = array(
    ($index ? 'index' : 'noindex'),
    ($follow ? 'follow' : 'nofollow'),
    ($archive ? 'archive' : 'noarchive')
  );
  return implode(',', $result);
}
function getRobots($robots) {
  $robots = explode(',', $robots);
  $result = array (
    'index' => ($robots[0] == 'index'),
    'follow' => ($robots[1] == 'follow'),
    'archive' => ($robots[2] == 'archive')
  );
  return $result;
}

/*
 * Display functions
 */

function addAuthorLink($author) { return '<a href="?author='.urlencode(trim(mb_convert_case($author, MB_CASE_LOWER, "UTF-8"))).'">'.trim(mb_convert_case($author, MB_CASE_TITLE, "UTF-8")).'</a>'; }

function displayAuthors($authors) {
  if (empty($authors)) { return null; }
  $authors = explode(",", $authors);
  $authors = array_map('trim', $authors);
  ksort($authors);
  //$authors = array_map('addAuthorLink', $authors);
  $authors = implode(', ', $authors);
  return $authors;
}

function displayGenres($genres)
{
  if (empty($genres)) { return null; }
  $genres = explode(",", $genres);
  ksort($genres);
  $genres = array_map(function($v) { return trim(mb_convert_case($v, MB_CASE_LOWER, "UTF-8")); }, $genres);
  return $genres;
}
function displayGenre($genre)
{
  return trim(mb_convert_case($genre, MB_CASE_TITLE, "UTF-8"));
}

function displaySummary($summary, $size = 300) {
  if (strlen($summary) > $size) {
    $separator = '<SPLIT_SEPARATOR>';
    $begin = explode($separator, wordwrap($summary, $size, $separator))[0];
    return trim($begin).' […].';
  }
  return $summary;
}

function displayNote($note) {
  $empty_stars = 5 - $note;
  $result = '<div class="stars stars-'.$note.' tip" data-title="Rated '.$note.' out of 5">';
  for ($i=0; $i<$note; $i++)
    $result .= '<i class="bi bi-star-fill"></i>';
  for ($i=0; $i<$empty_stars; $i++)
    $result .= '<i class="bi bi-star"></i>';
  return $result.'</div>'.PHP_EOL;
}
function displaySimpleNote($note) {
  $result = '';
  for ($i=0; $i<$note; $i++)
    $result .= '★';
  return $result;
}

function displayFlag($country) {
  global $_CONFIG;
  return '<span class="tip" data-title="'.$_CONFIG['countries'][$country].'"><span class="flag flag-'.$country.'" width="16" height="11"></span></span>';
}
function displayFlagWithName($country) {
  global $_CONFIG;
  return '<span class="tip" data-title="'.$_CONFIG['countries'][$country].'"><span class="flag flag-'.$country.'" width="16" height="11"></span></span> '.$_CONFIG['countries'][$country];
}
function displayCountryOptions($active = false) {
  global $_CONFIG;
  asort($_CONFIG['countries']);
  $result = '<option value="o">None</option>';
  foreach($_CONFIG['countries'] as $code => $name) {
    $result .= '<option value="'.$code.'"';
    if ($code == $active) {$result .= ' selected="selected"';}
    $result .= '>'.$name.'</option>';
  }
  return $result;
}

function displayPagination($page, $total_entries, $prefix = '?') {
  $page = (int) $page+0;
  if ($page == 0) { $page = 1; };
  $pages = max(1, ceil($total_entries/PAGINATION));

  // Display sweet pagination if there is only one page
  if ($pages === 1) { return '<li class="page-item disabled"><a class="page-link" href="./'.str_replace('&amp;', '', $prefix).'">1</a></li>'; }

  $first_jump = $page > 4 && $pages > 4;
  $last_jump = $page <= ($pages-4) && $pages > 4;
  $min_page = intval(max($page - (4) / 2, 2));
  $max_page = intval(min($page + (4) / 2, $pages));

  $result = '';
  $result .= '<li class="page-item'.($page==1 ? ' disabled' : null).'"><a href="./'.$prefix.Path::Page(max(1, $page-1)).'" title="Previous" class="page-link tip">&larr;</a></li>';
  $result .= '<li class="page-item'.($page==1 ? ' active' : null).'"><a class="page-link" href="./'.str_replace('&amp;', '', $prefix).'">1</a></li>';
  if ($first_jump && $pages != 5) { $result .= '<li class="page-item disabled gap"><span class="page-link">…</span></li>'; }
  else if ($first_jump) { $result .= '<li class="page-item"><a class="page-link" href="./'.$prefix.Path::Page(2).'">2</a></li>'; }

  for ($i=$min_page; $i<=$max_page; $i++) {
    $result .= '<li class="page-item '.($i==$page ? ' active' : null).'"><a class="page-link" href="./'.$prefix.Path::Page($i).'">'.$i.'</a></li>';
  }

  if ($last_jump && $pages != 5) { $result .= '<li class="page-item disabled gap"><span class="page-link">…</span></li>'; }
  else if ($last_jump) { $result .= '<li class="page-item"><a class="page-link" href="./'.$prefix.Path::Page(4).'">4</a></li>'; }
  if ($pages > 2 && $page <= $pages-3) { $result .= '<li class="page-item'.($page==$pages ? ' active' : null).'"><a class="page-link" href="./'.$prefix.Path::Page($pages).'">'.$pages.'</a></li>'; }
  $result .= '<li class="page-item'.($page==$pages ? ' disabled' : null).'"><a href="./'.$prefix.Path::Page(min($pages, $page+1)).'" title="Next" class="page-link tip">&rarr;</a></li>';

  return $result;
}
    
/*
* Pages
*/

function installPage($tpl) {
  global $_CONFIG;

  if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $_CONFIG['login'] = htmlspecialchars($_POST['login']);
    $_CONFIG['salt'] = sha1(uniqid('',true).'_'.mt_rand());
    $_CONFIG['hash'] = sha1($_CONFIG['login'].$_POST['password'].$_CONFIG['salt']);
    $_CONFIG['title'] = empty($_POST['title']) ? 'Books' : htmlspecialchars(trim($_POST['title']));
    $_CONFIG['author'] = empty($_POST['author']) ? $_CONFIG['login'] : htmlspecialchars(trim($_POST['author']));
    writeSettings();
    header('Location: '.$_SERVER['REQUEST_URI']);
    exit;
  }

  if (!function_exists('imagecreatefromjpeg')) { $tpl->assign('error_img', true); }

  $tpl->assign('page_title', 'Installation');
  $tpl->assign('menu_current', null);
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('form.install');
  exit;
}

function errorPage($message, $title) {
  global $tpl;
  global $_CONFIG;
  $tpl->assign('page_title', 'Error');
  $tpl->assign('menu_current', 'error');
  $tpl->assign('error_title', $title);
  $tpl->assign('error_content', $message.'<br>Please <a href="'.$_SERVER['REQUEST_URI'].'">try again</a>.');
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('error');
  exit;
}

function bookPage() {
  $books = new Books();
  $id = (int) $_GET['book']+0;
  if (! isset($books[$id])) { notFound(); }
  $book = $books[$id];

  global $tpl;
  $tpl->assign('page_title', $book['title']);
  $tpl->assign('menu_current', 'book');
  $tpl->assign('book', $book);
  $tpl->assign('id', $book['id']);
  $tpl->assign('displayAuthors', displayAuthors($book['author']));
  $tpl->assign('displayNote', displayNote($book['note']));
  $tpl->assign('country', $book['country']);
  $tpl->assign('displayGenres', displayGenres($book['genre']));
  $tpl->assign('token', getToken());
  $tpl->assign('books_count', $books->count());
  $tpl->assign('book_next', $books->nextBook($book['id']));
  $tpl->assign('book_previous', $books->previousBook($book['id']));
  $social_url = str_replace('./', BASE_URL, Path::Book($book['id']));
  $tpl->assign('social', [
    'title' => $book['title'],
    'description' => ($book['status']==Book::SEEN ? displaySimpleNote($book['note']).' — ' : ''). str_replace('<br />', '', displaySummary($book['summary'], 250)),
    'image' => Books::FullImageUrl($book),
    'twitter' => urlencode(($book['status']==Book::SEEN ? 'I’ve rated '.$book['note'].' '.StringHelper::pluralize('star', $book['note']) : 'I want to read').' “'.$book['title'].'” from '.($book['author']).' '.$social_url),
    'url' => $social_url
  ]);
  $tpl->draw('book');
  exit;
}

function randomBook() {
  $books = new Books();
  $book = $books->random();
  header('Location: '.str_replace('./', BASE_URL, Path::Book($book['id'])));
  exit;
}

function logsPage() {
  if (!isLogged()) {
    header('Location: ./?signin');
    exit;
  }
  global $tpl;
  global $_CONFIG;

  if (!empty($_POST['purge-logs'])) {
    if (acceptToken($_POST['token'])) {
      file_put_contents($_CONFIG['file_logs'], null); // in case of deleting file will not work
      unlink($_CONFIG['file_logs']);
      header('Location: ./?admin/logs');
      exit;
    }
    errorPage('The received token was empty or invalid.', 'Invalid security token');
  }

  if (!is_file($_CONFIG['file_logs'])) { $logs = 'No record.'; }
  else { $logs = file_get_contents($_CONFIG['file_logs']); }
  if (empty($logs)) { $logs = 'No record.'; }

  $tpl->assign('page_title', 'Logs');
  $tpl->assign('menu_current', 'admin-logs');
  $tpl->assign('logs', $logs);
  $tpl->assign('filename', basename($_CONFIG['file_logs']));
  $tpl->assign('token', getToken());
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('admin.logs');
  exit;
}

function settingsPage() {
  if (!isLogged()) {
    header('Location: ./?signin');
    exit;
  }
  global $tpl;
  global $_CONFIG;

  $themes_dir = array_diff(scandir($_CONFIG['dir_themes']), array('.', '..', '.htaccess', substr($_CONFIG['dir_cache'], strlen($_CONFIG['dir_themes'].'/'))));
  $themes = array('default');
  foreach ($themes_dir as $element) {
    if (is_dir($_CONFIG['dir_themes'].'/'.$element))
      $themes[] = $element;
  }
  $themes = array_unique($themes);

  if (!empty($_POST)) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      if (!empty($_POST['title'])) { $_CONFIG['title'] = htmlspecialchars($_POST['title']); }
      if (!empty($_POST['password'])) { $_CONFIG['hash'] = sha1($_CONFIG['login'].$_POST['password'].$_CONFIG['salt']); }
      if (!empty($_POST['pagination'])) { $_CONFIG['pagination'] = max(2, $_POST['pagination']+0); }
      if (!empty($_POST['robots'])) { $_CONFIG['robots'] = parseRobots(in_array('index', $_POST['robots']), in_array('follow', $_POST['robots']), in_array('archive', $_POST['robots']) ); } else { $_CONFIG['robots'] = $_CONFIG['default_norobots']; }
      $_CONFIG['author'] = empty($_POST['author']) ? $_CONFIG['login'] : htmlspecialchars(trim($_POST['author']));
      if (!empty($_POST['theme']) && in_array($_POST['theme'], $themes)) { $_CONFIG['theme'] = $_POST['theme']; } else { $_CONFIG['theme'] = $_CONFIG['default_theme']; }

      writeSettings();

      header('Location: ./?admin/settings&updated');
      exit;
    }
    errorPage('The received token was empty or invalid.', 'Invalid security token');
  }

  $tpl->assign('settings_username', $_CONFIG['login']);
  $tpl->assign('settings_robots', getRobots($_CONFIG['robots']));
  $tpl->assign('settings_file', $_CONFIG['file_settings']);
  $tpl->assign('settings_themes', $themes);
  $tpl->assign('settings_theme', empty($_CONFIG['theme']) ? $_CONFIG['default_theme'] : $_CONFIG['theme']);

  $tpl->assign('page_title', 'Settings');
  $tpl->assign('menu_current', 'admin-settings');
  $tpl->assign('token', getToken());
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('admin.settings');
  exit;
}

function exportPage() {
  if (!isLogged()) {
    header('Location: ./?signin');
    exit;
  }
  global $tpl;
  global $_CONFIG;
  $books = new Books();

  if (!empty($_POST)) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      $private = !isset($_POST['private']);
      $images = isset($_POST['images']);
      $export = array();
      if (!empty($_POST['book'])) { foreach ($_POST['book'] as $key => $value) { $export[] = $key; } }
      header('Content-Type: application/force-download');
      header('Content-Disposition: attachment; filename="'.trim(mb_convert_case(TITLE, MB_CASE_LOWER, "UTF-8")).'_'.date('Y_m_d').'.json"');
      header('Content-type: application/json');
      exit($books->export($private, $images, $export));
    }
    errorPage('The received token was empty or invalid.', 'Invalid security token');
  }

  $books = $books->all();
  uasort($books, function($a, $b) { return strcmp($a['title'], $b['title']); });

  $tpl->assign('page_title', 'Export books');
  $tpl->assign('menu_current', 'admin-export');
  $tpl->assign('books', $books);
  $tpl->assign('token', getToken());
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('admin.export');
  exit;
}

function importPage() {
  if (!isLogged()) {
    header('Location: ./?signin');
    exit;
  }
  global $tpl;
  global $_CONFIG;

  if (isset($_GET['imported'])) { $tpl->assign('imported', true); }
  else if (!empty($_FILES)) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      try {
        $ext_array = explode('.', $_FILES['file']['name']);
        $extension = end($ext_array);
        $mime = $_FILES['file']['type'];
        // check extension et mime type
        if ($extension != 'json') { throw new \Exception('<br>Extension of the file is not allowed! Please import a JSON file.'); }
        if (! ($mime == 'application/octet-stream' || $mime == 'application/json')) { throw new \Exception('<br>MIME type of the file is not allowed! Please import a JSON file.'); }

        $file = file_get_contents($_FILES['file']['tmp_name']);
        if (!$file) { throw new \Exception('An error occured while reading the file.'); }

        $result = Books::Import($file, isset($_POST['keep_ids']), isLogged());
        if (!$result) { throw new \Exception('An error occured while importing the file.'); }

        header('Location: ./?admin/import&imported');
        exit;
      } catch(\Exception $e) {
          $tpl->assign('error', $e->getMessage());
        }
    } else {
      errorPage('The received token was empty or invalid.', 'Invalid security token');
    }
  }

  $tpl->assign('page_title', 'Import books');
  $tpl->assign('menu_current', 'admin-import');
  $tpl->assign('token', getToken());
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('admin.import');
  exit;
}

function newBook() {
  if (!isLogged()) {
    header('Location: ./?signin');
    exit;
  }
  global $tpl;
  global $_CONFIG;

  if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      $input_status = ((isset($_POST['status']) && $_POST['status'] != null) ? Book::SEEN : null);
      $inputs = array(
        'title' => (isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])) : null),
        'author' => (isset($_POST['author']) ? trim(htmlspecialchars($_POST['author'])) : null),
        'summary' => (isset($_POST['summary']) ? keepHtmlNewline($_POST['summary']) : null),
        'publisher' => (isset($_POST['publisher']) ? trim(htmlspecialchars($_POST['publisher'])) : null),
        'status' => $input_status,
        'note' => (isset($_POST['note']) ? checkRatingNote($_POST['note'], $input_status) : null),
        'read_date' => (isset($_POST['read_date']) ? checkInputReadDate($_POST['read_date'], $input_status) : null),
        'review' => (isset($_POST['review']) ? checkReview($_POST['review'], $input_status) : null),
        'genre' => (isset($_POST['genre']) ? checkGenre($_POST['genre']) : null),
        'publication_year' => (isset($_POST['publication_year']) ? checkInputPublicationYear($_POST['publication_year'], $input_status) : null),
        'pages' => (isset($_POST['pages']) ? checkPages($_POST['pages']) : null),
        'country' => (isset($_POST['country']) ? checkCountry($_POST['country']) : null),
        'link_website' => (isset($_POST['link_website']) ? checkLink($_POST['link_website']) : null),
        'link_image' => (isset($_POST['link_image']) ? checkLink($_POST['link_image']) : null),
        'link_image_import' => (isset($_POST['link_image_import']) ? true : null)
      );
      $tpl->assign('inputs', $inputs);
      try {
        if (empty($inputs['title'])) { throw new \Exception('Title must not be empty.'); }
        if (empty($inputs['author'])) { throw new \Exception('Author must not be empty.'); }
        if (empty($inputs['summary'])) { throw new \Exception('Summary must not be empty.'); }

        $books = new Books(isLogged());
        $id = time();
        while(isset($books[$id])){
          $id--;
        }
        $book = array( 'id' => $id );

        // Check if we need to get the image given with url
        if ($inputs['link_image_import']) {
        importImage($inputs['link_image'], $book['id']);
        $inputs['link_image'] = $_CONFIG['dir_images'].'/'.$book['id'].'.jpg';
        }
        unset($inputs['link_image_import']);

        foreach ($inputs as $key => $value) { $book[$key] = $value; }
        $books[$book['id']] = $book;
        $books->save();

        header('Location: '.Path::Book($book['id']));
        exit;
      } catch(\Exception $e) {
        $tpl->assign('error', $e->getMessage());
      }
    }
    else { errorPage('The received token was empty or invalid.', 'Invalid security token'); }
  }

  $tpl->assign('page_title', 'New book');
  $tpl->assign('menu_current', 'admin-new');
  $tpl->assign('today', date('Y-m-d'));
  $tpl->assign('today_year', date('Y'));
  $tpl->assign('countries', displayCountryOptions(isset($inputs['country']) ? $inputs['country'] : null));
  $tpl->assign('token', getToken());
  $tpl->assign('form_action', './?admin/new');
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('form.book');
  exit;
}

function editBookPage() {
  if (!isLogged()) {
    header('Location: ./');
    exit;
  }

  $books = new Books(isLogged());
  $id = (int) $_GET['edit']+0;
  if (! isset($books[$id])) { notFound(); }
  $book = $books[$id];
  global $tpl;
  global $_CONFIG;

  if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      
      // Delete book
      if (!empty($_POST['delete']) && $_POST['delete'] == md5($id))
      {
        $img = $_CONFIG['dir_images'].'/'.$id.'.jpg';
        if (is_file($img)) { unlink($img); }
        unset($books[$id]);
        $books->save();
        header('Location: ./');
        exit;
      }

      $input_status = ((isset($_POST['status']) && $_POST['status'] != null) ? Book::SEEN : null);
      $inputs = array(
        'title' => (isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])) : null),
        'author' => (isset($_POST['author']) ? trim(htmlspecialchars($_POST['author'])) : null),
        'summary' => (isset($_POST['summary']) ? keepHtmlNewline($_POST['summary']) : null),
        'publisher' => (isset($_POST['publisher']) ? trim(htmlspecialchars($_POST['publisher'])) : null),
        'status' => $input_status,
        'note' => (isset($_POST['note']) ? checkRatingNote($_POST['note'], $input_status) : null),
        'read_date' => (isset($_POST['read_date']) ? checkInputReadDate($_POST['read_date'], $input_status) : null),
        'review' => (isset($_POST['review']) ? checkReview($_POST['review'], $input_status) : null),
        'genre' => (isset($_POST['genre']) ? checkGenre($_POST['genre']) : null),
        'publication_year' => (isset($_POST['publication_year']) ? checkInputPublicationYear($_POST['publication_year'], $input_status) : null),
        'pages' => (isset($_POST['pages']) ? checkPages($_POST['pages']) : null),
        'country' => (isset($_POST['country']) ? checkCountry($_POST['country']) : null),
        'link_website' => (isset($_POST['link_website']) ? checkLink($_POST['link_website']) : null),
        'link_image' => (isset($_POST['link_image']) ? checkLink($_POST['link_image']) : null),
        'link_image_import' => (isset($_POST['link_image_import']) ? true : null)
      );
      try {
        if (empty($inputs['title'])) { throw new \Exception('Title must not be empty.'); }
        if (empty($inputs['author'])) { throw new \Exception('Author must not be empty.'); }
        if (empty($inputs['summary'])) { throw new \Exception('Summary must not be empty.'); }
        $book = array( 'id' => $id );

        // Check if we need to get the image given with url
        if ($inputs['link_image_import']) {
          importImage($inputs['link_image'], $book['id']);
          $inputs['link_image'] = $_CONFIG['dir_images'].'/'.$id.'.jpg';
        }
        unset($inputs['link_image_import']);

        foreach ($inputs as $key => $value) { $book[$key] = $value; }
        $books[$id] = $book;
        $books->save();

        header('Location: '.Path::Book($id));
        exit;
      } catch(\Exception $e) {
        $tpl->assign('error', $e->getMessage());
      }
    }
    else { errorPage('The received token was empty or invalid.', 'Invalid security token'); }
  }
  else {
    $inputs = array(
      'title' => $book['title'],
      'author' => $book['author'],
      'summary' => str_replace('<br />', '', $book['summary']),
      'publisher' => $book['publisher'],
      'status' => $book['status'],
      'note' => $book['note'],
      'read_date' => $book['read_date'],
      'review' => str_replace('<br />', '', $book['review']),
      'genre' => $book['genre'],
      'publication_year' => $book['publication_year'],
      'pages' => $book['pages'],
      'country' => $book['country'],
      'link_website' => preg_replace('#http://#', '', $book['link_website']),
      'link_image' => preg_replace('#http://#', '', $book['link_image'])
    );
  }

  $tpl->assign('page_title', 'Edit book');
  $tpl->assign('menu_current', 'admin-edit');
  $tpl->assign('inputs', $inputs);
  $tpl->assign('today', date('Y-m-d'));
  $tpl->assign('today_year', date('Y'));
  $tpl->assign('countries', displayCountryOptions($inputs['country']));
  $tpl->assign('token', getToken());
  $tpl->assign('id', $id);
  $tpl->assign('form_action', Path::EditBook($id));
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('form.book');
  exit;
}

function signoutPage() {
  logout();
  session_destroy();
  header('Location: ./');
  exit;
}

function signinPage() {
  if (isLogged()) {
    header('Location: ./?admin/settings');
    exit;
  }
  global $tpl;
  global $_CONFIG;

  if (!canLogin()) {
    global $tpl;
    $tpl->assign('page_title', 'Error');
    $tpl->assign('menu_current', 'error');
    $tpl->assign('error_title', 'You are in jail');
    $tpl->assign('error_content', 'You have been banned after too many bad attemps.<br>Please try later.');
    $tpl->draw('error');
    exit;
  }

  if (!empty($_POST['login']) && !empty($_POST['password'])) {
    if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
      if (check_auth(htmlspecialchars($_POST['login']), $_POST['password'])) {
        loginSucceeded();
        $cookiedir = ''; if (dirname($_SERVER['SCRIPT_NAME'])!='/') { $cookiedir=dirname($_SERVER["SCRIPT_NAME"]).'/'; }
        session_set_cookie_params(0, $cookiedir, $_SERVER['HTTP_HOST']);
        session_regenerate_id(true);
        header('Location: ./');
        exit;
      }
      loginFailed();
      errorPage('The given username or password was wrong. <br>If you do not remberer your login informations, just delete the file <code>'.basename($_CONFIG['file_settings']).'</code>.', 'Invalid username or password');
    }
    loginFailed();
    errorPage('The received token was empty or invalid.', 'Invalid security token');
  }

  $tpl->assign('page_title', 'Sign in');
  $tpl->assign('menu_current', 'signin');
  $tpl->assign('token', getToken());
  $tpl->assign('robots', 'noindex,noarchive');
  $tpl->draw('form.signin');
  exit;
}

function readlistPage() {
  global $tpl;
  $books = new Books();
  $books->byStatus(); // Used to update $books->total_no_seen

  $page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
  if ($page == 0 || $page == 1) { header('Location: ./?readlist'); exit; }
  else if ($page == -1) { $page = 0; }
  if (!empty($_GET['page'])) {
    checkPagination($page, $books->total_not_seen);
    $tpl->assign('book', $books->byStatus(($page-1)*PAGINATION));
  } else { $tpl->assign('book', $books->byStatus()); }
  $tpl->assign('pagination', displayPagination($page, $books->total_not_seen, '?readlist&amp;'));
  $tpl->assign('page_title', !empty($page) ?  'Readlist &middot; Page '.($page) : 'Readlist');
  $tpl->assign('menu_current', 'soon');
  $tpl->assign('robots', 'noindex');
  $tpl->assign('token', getToken());
  $tpl->draw('list');
  exit;
}

function bestPage() {
  global $tpl;
  $books = new Books();
  $books->byNote(); // Used to update $books->total_seen

  $page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
  if ($page == 0 || $page == 1) { header('Location: ./?best'); exit; }
  else if ($page == -1) { $page = 0; }
  if (!empty($_GET['page'])) {
    checkPagination($page, $books->total_seen);
    $tpl->assign('book', $books->byNote(($page-1)*PAGINATION));
  }
  else { $tpl->assign('book', $books->byNote()); }
  $tpl->assign('pagination', displayPagination($page, $books->total_seen, '?best&amp;'));
  $tpl->assign('page_title', !empty($page) ?  'Best rated &middot; Page '.($page) : 'Best rated');
  $tpl->assign('menu_current', 'best');
  $tpl->assign('robots', 'noindex');
  $tpl->assign('token', getToken());
  $tpl->draw('list');
  exit;
}

function searchPage() {
  if (empty($_GET['search'])) { header('Location: ./'); exit; }

  global $tpl;
  $books = new Books();
  $books->search(htmlspecialchars($_GET['search'])); // Used to update $books->total_search

  $page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
  if ($page == 0 || $page == 1) { header('Location: ./?search='.htmlspecialchars($_GET['search'])); exit; }
  else if ($page == -1) { $page = 0; }
  if (!empty($_GET['page'])) {
    checkPagination($page, $books->total_search);
    $tpl->assign('book', $books->search(htmlspecialchars($_GET['search']), ($page-1)*PAGINATION));
  }
  else { $tpl->assign('book', $books->search(htmlspecialchars($_GET['search']))); }
  $tpl->assign('pagination', displayPagination($page, $books->total_search, '?search='.htmlspecialchars($_GET['search']).'&amp;'));
  $tpl->assign('page_title', !empty($page) ?  'Search &middot; Page '.($page) : 'Search');
  $tpl->assign('menu_current', 'search');
  $tpl->assign('robots', 'noindex');
  $tpl->assign('search', htmlspecialchars($_GET['search']));
  $tpl->assign('search_count', $books->total_search);
  $tpl->assign('token', getToken());
  $tpl->draw('list');
  exit;
}

function genrePage() {
  if (empty($_GET['genre'])) { notFound(); }

  global $tpl;
  $genre = htmlspecialchars($_GET['genre']);
  $books = new Books();
  $books->byGenre($genre); // Used to update $books->total_genre
  
  if ($books->total_genre == 0) { notFound(); }

  $page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
  if ($page == 0 || $page == 1) { header('Location: ./?genre='.$genre); exit; }
  else if ($page == -1) { $page = 0; }
  if (!empty($_GET['page'])) {
    checkPagination($page, $books->total_genre);
    $tpl->assign('book', $books->byGenre($genre, ($page-1)*PAGINATION));
  }
  else { $tpl->assign('book', $books->byGenre($genre)); }

  $tpl->assign('genre', $genre);
  $tpl->assign('pagination', displayPagination($page, $books->total_genre, '?genre='.htmlspecialchars($_GET['genre']).'&amp;'));
  $tpl->assign('page_title', !empty($page) ? ucfirst(htmlspecialchars($_GET['genre'])).' &middot; Page '.($page) : ucfirst(htmlspecialchars($_GET['genre'])));
  $tpl->assign('menu_current', 'genre');
  $tpl->assign('robots', 'noindex');
  $tpl->assign('token', getToken());
  $tpl->draw('list');
  exit;
}

function homePage() {
  global $tpl;
  $books = new Books();

  $page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
  if ($page == 0 || $page == 1) { header('Location: ./'); exit; }
  else if ($page == -1) { $page = 0; }
  // Check if pagination is asked
  if (!empty($_GET['page'])) {
    checkPagination($page, $books->count());
    $tpl->assign('book', $books->lastBooks(($page-1)*PAGINATION));
  }
  else { $tpl->assign('book', $books->lastBooks()); }
  $tpl->assign('pagination', displayPagination($page, $books->count()));
  $tpl->assign('page_title', !empty($page) ? 'Page '.($page) : '');
  $tpl->assign('menu_current', 'home');
  $tpl->assign('token', getToken());
  $tpl->draw('list');
  exit;
}


/*
 * ROUTES
 */

abstract class Path
{
  static function Page($page) {
    return 'page='.$page;
  }

  static function Book($id) {
    $books = new Books(isLogged());
    $title = isset($books[$id]) ? '-'.StringHelper::slug($books[$id]['title']) : '';
    return './?book='.$id.$title;
  }
  static function EditBook($id) {
    return './?edit='.$id;
  }
}

if (isset($_GET['best'])) { bestPage(); }
if (isset($_GET['readlist'])) { readlistPage(); }
if (isset($_GET['search'])) { searchPage(); }
if (isset($_GET['genre'])) { genrePage(); }
// Homepage pagination must be the last
if (empty($_GET) || isset($_GET['page'])) { homePage(); }

if (!empty($_GET['book'])) { bookPage(); }
if (isset($_GET['random'])) { randomBook(); }
if (isset($_GET['signin'])) { signinPage(); }
if (isset($_GET['signout'])) { signoutPage(); }

if (isset($_GET['admin/new'])) { newBook(); }
if (isset($_GET['edit']) && !empty($_GET['edit'])) { editBookPage(); }
if (isset($_GET['admin/logs'])) { logsPage(); }
if (isset($_GET['admin/settings'])) { settingsPage(); }
if (isset($_GET['admin/export'])) { exportPage(); }
if (isset($_GET['admin/import'])) { importPage(); }

// Nothing to do: 404 error
function notFound() {
  global $tpl;
  global $_CONFIG;
  header('HTTP/1.1 404 Not Found', true, 404);
  $tpl->assign('page_title', 'Error 404');
  $tpl->assign('menu_current', 'error');
  $tpl->assign('robots', $_CONFIG['default_norobots']);
  $tpl->draw('404');
  exit;
}
notFound();

?>