<?php
   include_once('consulta_matricula_session.php');
   @session_start() ;
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil']          = "conn_mysql";
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_prod']       = "";
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_conf']       = "";
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imagens']    = "";
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imag_temp']  = "";
   $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_doc']        = "";
//
class consulta_matricula_ini
{
   var $nm_cod_apl;
   var $nm_nome_apl;
   var $nm_seguranca;
   var $nm_grupo;
   var $nm_autor;
   var $nm_versao_sc;
   var $nm_tp_lic_sc;
   var $nm_dt_criacao;
   var $nm_hr_criacao;
   var $nm_autor_alt;
   var $nm_dt_ult_alt;
   var $nm_hr_ult_alt;
   var $nm_timestamp;
   var $nm_app_version;
   var $cor_link_dados;
   var $root;
   var $server;
   var $java_protocol;
   var $server_pdf;
   var $Arr_result;
   var $sc_protocolo;
   var $path_prod;
   var $path_link;
   var $path_aplicacao;
   var $path_embutida;
   var $path_botoes;
   var $path_img_global;
   var $path_img_modelo;
   var $path_icones;
   var $path_imagens;
   var $path_imag_cab;
   var $path_imag_temp;
   var $path_libs;
   var $path_doc;
   var $str_lang;
   var $str_conf_reg;
   var $str_schema_all;
   var $Str_btn_grid;
   var $path_cep;
   var $path_secure;
   var $path_js;
   var $path_help;
   var $path_adodb;
   var $path_grafico;
   var $path_atual;
   var $Gd_missing;
   var $sc_site_ssl;
   var $nm_falta_var;
   var $nm_falta_var_db;
   var $nm_tpbanco;
   var $nm_servidor;
   var $nm_usuario;
   var $nm_senha;
   var $nm_database_encoding;
   var $nm_con_db2 = array();
   var $nm_con_persistente;
   var $nm_con_use_schema;
   var $nm_tabela;
   var $nm_ger_css_emb;
   var $sc_tem_trans_banco;
   var $nm_bases_all;
   var $nm_bases_access;
   var $nm_bases_db2;
   var $nm_bases_ibase;
   var $nm_bases_informix;
   var $nm_bases_mssql;
   var $nm_bases_mysql;
   var $nm_bases_postgres;
   var $nm_bases_oracle;
   var $nm_bases_sqlite;
   var $nm_bases_sybase;
   var $nm_bases_vfp;
   var $nm_bases_odbc;
   var $sc_page;
   var $sc_lig_md5 = array();
//
   function init($Tp_init = "")
   {
       global
             $nm_url_saida, $nm_apl_dependente, $script_case_init, $nmgp_opcao;

      if (!function_exists("sc_check_mobile"))
      {
          include_once("../_lib/lib/php/nm_check_mobile.php");
      }
      $_SESSION['scriptcase']['proc_mobile'] = sc_check_mobile();
      @ini_set('magic_quotes_runtime', 0);
      $this->sc_page = $script_case_init;
      $_SESSION['scriptcase']['sc_num_page'] = $script_case_init;
      $_SESSION['scriptcase']['sc_cnt_sql']  = 0;
      $this->sc_charset['UTF-8'] = 'utf-8';
      $this->sc_charset['ISO-2022-JP'] = 'iso-2022-jp';
      $this->sc_charset['ISO-2022-KR'] = 'iso-2022-kr';
      $this->sc_charset['ISO-8859-1'] = 'iso-8859-1';
      $this->sc_charset['ISO-8859-2'] = 'iso-8859-2';
      $this->sc_charset['ISO-8859-3'] = 'iso-8859-3';
      $this->sc_charset['ISO-8859-4'] = 'iso-8859-4';
      $this->sc_charset['ISO-8859-5'] = 'iso-8859-5';
      $this->sc_charset['ISO-8859-6'] = 'iso-8859-6';
      $this->sc_charset['ISO-8859-7'] = 'iso-8859-7';
      $this->sc_charset['ISO-8859-8'] = 'iso-8859-8';
      $this->sc_charset['ISO-8859-8-I'] = 'iso-8859-8-i';
      $this->sc_charset['ISO-8859-9'] = 'iso-8859-9';
      $this->sc_charset['ISO-8859-10'] = 'iso-8859-10';
      $this->sc_charset['ISO-8859-13'] = 'iso-8859-13';
      $this->sc_charset['ISO-8859-14'] = 'iso-8859-14';
      $this->sc_charset['ISO-8859-15'] = 'iso-8859-15';
      $this->sc_charset['WINDOWS-1250'] = 'windows-1250';
      $this->sc_charset['WINDOWS-1251'] = 'windows-1251';
      $this->sc_charset['WINDOWS-1252'] = 'windows-1252';
      $this->sc_charset['WINDOWS-1253'] = 'windows-1253';
      $this->sc_charset['WINDOWS-1254'] = 'windows-1254';
      $this->sc_charset['WINDOWS-1255'] = 'windows-1255';
      $this->sc_charset['WINDOWS-1256'] = 'windows-1256';
      $this->sc_charset['WINDOWS-1257'] = 'windows-1257';
      $this->sc_charset['KOI8-R'] = 'koi8-r';
      $this->sc_charset['BIG-5'] = 'big5';
      $this->sc_charset['EUC-CN'] = 'EUC-CN';
      $this->sc_charset['GB18030'] = 'GB18030';
      $this->sc_charset['GB2312'] = 'gb2312';
      $this->sc_charset['EUC-JP'] = 'euc-jp';
      $this->sc_charset['SJIS'] = 'shift-jis';
      $this->sc_charset['EUC-KR'] = 'euc-kr';
      $_SESSION['scriptcase']['charset_entities']['UTF-8'] = 'UTF-8';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-1'] = 'ISO-8859-1';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-5'] = 'ISO-8859-5';
      $_SESSION['scriptcase']['charset_entities']['ISO-8859-15'] = 'ISO-8859-15';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1251'] = 'cp1251';
      $_SESSION['scriptcase']['charset_entities']['WINDOWS-1252'] = 'cp1252';
      $_SESSION['scriptcase']['charset_entities']['BIG-5'] = 'BIG5';
      $_SESSION['scriptcase']['charset_entities']['EUC-CN'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['GB2312'] = 'GB2312';
      $_SESSION['scriptcase']['charset_entities']['SJIS'] = 'Shift_JIS';
      $_SESSION['scriptcase']['charset_entities']['EUC-JP'] = 'EUC-JP';
      $_SESSION['scriptcase']['charset_entities']['KOI8-R'] = 'KOI8-R';
      $_SESSION['scriptcase']['trial_version'] = 'N';
      $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['decimal_db'] = "."; 

      $this->nm_cod_apl      = "consulta_matricula"; 
      $this->nm_nome_apl     = ""; 
      $this->nm_seguranca    = ""; 
      $this->nm_grupo        = "SAE"; 
      $this->nm_grupo_versao = "1"; 
      $this->nm_autor        = "marcos"; 
      $this->nm_versao_sc    = "v8"; 
      $this->nm_tp_lic_sc    = "ep_gold"; 
      $this->nm_dt_criacao   = "20190528"; 
      $this->nm_hr_criacao   = "155549"; 
      $this->nm_autor_alt    = "marcos"; 
      $this->nm_dt_ult_alt   = "20191204"; 
      $this->nm_hr_ult_alt   = "163442"; 
      $temp_bug_list         = explode(" ", microtime()); 
      list($NM_usec, $NM_sec) = $temp_bug_list; 
      $this->nm_timestamp    = (float) $NM_sec; 
      $this->nm_app_version  = "1.0.0";
// 
// 
      $NM_dir_atual = getcwd();
      if (empty($NM_dir_atual))
      {
          $str_path_sys          = (isset($_SERVER['SCRIPT_FILENAME'])) ? $_SERVER['SCRIPT_FILENAME'] : $_SERVER['ORIG_PATH_TRANSLATED'];
          $str_path_sys          = str_replace("\\", '/', $str_path_sys);
      }
      else
      {
          $sc_nm_arquivo         = explode("/", $_SERVER['PHP_SELF']);
          $str_path_sys          = str_replace("\\", "/", getcwd()) . "/" . $sc_nm_arquivo[count($sc_nm_arquivo)-1];
      }
      //check publication with the prod
      $str_path_apl_url = $_SERVER['PHP_SELF'];
      $str_path_apl_url = str_replace("\\", '/', $str_path_apl_url);
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/"));
      $str_path_apl_url = substr($str_path_apl_url, 0, strrpos($str_path_apl_url, "/")+1);
      $str_path_apl_dir = substr($str_path_sys, 0, strrpos($str_path_sys, "/"));
      $str_path_apl_dir = substr($str_path_apl_dir, 0, strrpos($str_path_apl_dir, "/")+1);
      //check prod
      if(empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_prod']))
      {
              /*check prod*/$_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_prod'] = $str_path_apl_url . "_lib/prod";
      }
      //check img
      if(empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imagens']))
      {
              /*check img*/$_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imagens'] = $str_path_apl_url . "_lib/file/img";
      }
      //check tmp
      if(empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imag_temp']))
      {
              /*check tmp*/$_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imag_temp'] = $str_path_apl_url . "_lib/tmp";
      }
      //check doc
      if(empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_doc']))
      {
              /*check doc*/$_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_doc'] = $str_path_apl_dir . "_lib/file/doc";
      }
      //end check publication with the prod
      $this->sc_site_ssl     = (isset($_SERVER['HTTP_REFERER']) && strtolower(substr($_SERVER['HTTP_REFERER'], 0, 5)) == 'https') ? true : false;
      $this->sc_protocolo    = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->sc_protocolo    = "";
      $this->path_prod       = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_prod'];
      $this->path_conf       = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_conf'];
      $this->path_imagens    = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imagens'];
      $this->path_imag_temp  = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_imag_temp'];
      $this->path_doc        = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_path_doc'];
      if (!isset($_SESSION['scriptcase']['str_lang']) || empty($_SESSION['scriptcase']['str_lang']))
      {
          $_SESSION['scriptcase']['str_lang'] = "pt_br";
      }
      if (!isset($_SESSION['scriptcase']['str_conf_reg']) || empty($_SESSION['scriptcase']['str_conf_reg']))
      {
          $_SESSION['scriptcase']['str_conf_reg'] = "pt_br";
      }
      $this->str_lang        = $_SESSION['scriptcase']['str_lang'];
      $this->str_conf_reg    = $_SESSION['scriptcase']['str_conf_reg'];
      $this->str_schema_all    = (isset($_SESSION['scriptcase']['str_schema_all']) && !empty($_SESSION['scriptcase']['str_schema_all'])) ? $_SESSION['scriptcase']['str_schema_all'] : "Green/Green";
      $_SESSION['scriptcase']['erro']['str_schema'] = $this->str_schema_all . "_error.css";
      $_SESSION['scriptcase']['erro']['str_lang']   = $this->str_lang;
      $this->server          = (!isset($_SERVER['HTTP_HOST'])) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
      if (!isset($_SERVER['HTTP_HOST']) && isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && !$this->sc_site_ssl )
      {
          $this->server         .= ":" . $_SERVER['SERVER_PORT'];
      }
      $this->java_protocol   = ($this->sc_site_ssl) ? 'https://' : 'http://';
      $this->server_pdf      = $this->java_protocol . $this->server;
      $this->server          = "";
      $str_path_web          = $_SERVER['PHP_SELF'];
      $str_path_web          = str_replace("\\", '/', $str_path_web);
      $str_path_web          = str_replace('//', '/', $str_path_web);
      $this->root            = substr($str_path_sys, 0, -1 * strlen($str_path_web));
      $this->path_aplicacao  = substr($str_path_sys, 0, strrpos($str_path_sys, '/'));
      $this->path_aplicacao  = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/')) . '/consulta_matricula';
      $this->path_embutida   = substr($this->path_aplicacao, 0, strrpos($this->path_aplicacao, '/') + 1);
      $this->path_aplicacao .= '/';
      $this->path_link       = substr($str_path_web, 0, strrpos($str_path_web, '/'));
      $this->path_link       = substr($this->path_link, 0, strrpos($this->path_link, '/')) . '/';
      $this->path_botoes     = $this->path_link . "_lib/img";
      $this->path_img_global = $this->path_link . "_lib/img";
      $this->path_img_modelo = $this->path_link . "_lib/img";
      $this->path_icones     = $this->path_link . "_lib/img";
      $this->path_imag_cab   = $this->path_link . "_lib/img";
      $this->path_help       = $this->path_link . "_lib/webhelp/";
      $this->path_font       = $this->root . $this->path_link . "_lib/font/";
      $this->path_btn        = $this->root . $this->path_link . "_lib/buttons/";
      $this->path_css        = $this->root . $this->path_link . "_lib/css/";
      $this->path_lib_php    = $this->root . $this->path_link . "_lib/lib/php";
      $this->path_lib_js     = $this->root . $this->path_link . "_lib/lib/js";
      $this->path_lang       = "../_lib/lang/";
      $this->path_lang_js    = "../_lib/js/";
      $this->path_chart_theme = $this->root . $this->path_link . "_lib/chart/";
      $this->path_cep        = $this->path_prod . "/cep";
      $this->path_cor        = $this->path_prod . "/cor";
      $this->path_js         = $this->path_prod . "/lib/js";
      $this->path_libs       = $this->root . $this->path_prod . "/lib/php";
      $this->path_third      = $this->root . $this->path_prod . "/third";
      $this->path_secure     = $this->root . $this->path_prod . "/secure";
      $this->path_adodb      = $this->root . $this->path_prod . "/third/adodb";
      $_SESSION['scriptcase']['dir_temp'] = $this->root . $this->path_imag_temp;
      if (!isset($_SESSION['scriptcase']['fusioncharts_new']))
      {
          $_SESSION['scriptcase']['fusioncharts_new'] = @is_dir($this->path_third . '/fusioncharts_xt_ol');
      }
      if (!isset($_SESSION['scriptcase']['phantomjs_charts']))
      {
          $_SESSION['scriptcase']['phantomjs_charts'] = @is_dir($this->path_third . '/phantomjs');
      }
      if (isset($_SESSION['scriptcase']['phantomjs_charts']))
      {
          $aTmpOS = $this->getRunningOS();
          $_SESSION['scriptcase']['phantomjs_charts'] = @is_dir($this->path_third . '/phantomjs/' . $aTmpOS['os']);
      }
      if (!class_exists('Services_JSON'))
      {
          include_once("consulta_matricula_json.php");
      }
      $this->SC_Link_View = (isset($_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_Link_View'])) ? $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_Link_View'] : false;
      if (isset($_GET['SC_Link_View']) && !empty($_GET['SC_Link_View']) && is_numeric($_GET['SC_Link_View']))
      {
          if ($_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['embutida'])
          {
              $this->SC_Link_View = true;
              $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_Link_View'] = true;
          }
      }
      if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_save_ancor")
      {
          $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['ancor_save'] = $_POST['ancor_save'];
          $oJson = new Services_JSON();
          exit;
      }
      if (isset($_SESSION['scriptcase']['user_logout']))
      {
          foreach ($_SESSION['scriptcase']['user_logout'] as $ind => $parms)
          {
              if (isset($_SESSION[$parms['V']]) && $_SESSION[$parms['V']] == $parms['U'])
              {
                  unset($_SESSION['scriptcase']['user_logout'][$ind]);
                  $nm_apl_dest = $parms['R'];
                  $dir = explode("/", $nm_apl_dest);
                  if (count($dir) == 1)
                  {
                      $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
                      $nm_apl_dest = $this->path_link . SC_dir_app_name($nm_apl_dest) . "/";
                  }
                  if (isset($_POST['nmgp_opcao']) && ($_POST['nmgp_opcao'] == "ajax_event" || $_POST['nmgp_opcao'] == "ajax_navigate"))
                  {
                      $this->Arr_result = array();
                      $this->Arr_result['redirInfo']['action']              = $nm_apl_dest;
                      $this->Arr_result['redirInfo']['target']              = $parms['T'];
                      $this->Arr_result['redirInfo']['metodo']              = "post";
                      $this->Arr_result['redirInfo']['script_case_init']    = $this->sc_page;
                      $this->Arr_result['redirInfo']['script_case_session'] = session_id();
                      $oJson = new Services_JSON();
                      echo $oJson->encode($this->Arr_result);
                      exit;
                  }
?>
                  <html>
                  <body>
                  <form name="FRedirect" method="POST" action="<?php echo $nm_apl_dest; ?>" target="<?php echo $parms['T']; ?>">
                  </form>
                  <script>
                   document.FRedirect.submit();
                  </script>
                  </body>
                  </html>
<?php
                  exit;
              }
          }
      }
      if ($Tp_init == "Path_sub")
      {
          return;
      }
      $str_path = substr($this->path_prod, 0, strrpos($this->path_prod, '/') + 1);
      if (!is_file($this->root . $str_path . 'devel/class/xmlparser/nmXmlparserIniSys.class.php'))
      {
          unset($_SESSION['scriptcase']['nm_sc_retorno']);
          unset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']);
      }
      include($this->path_lang . $this->str_lang . ".lang.php");
      include($this->path_lang . "config_region.php");
      include($this->path_lang . "lang_config_region.php");
      asort($this->Nm_lang_conf_region);
      $_SESSION['scriptcase']['charset']  = (isset($this->Nm_lang['Nm_charset']) && !empty($this->Nm_lang['Nm_charset'])) ? $this->Nm_lang['Nm_charset'] : "ISO-8859-1";
      ini_set('default_charset', $_SESSION['scriptcase']['charset']);
      $_SESSION['scriptcase']['charset_html']  = (isset($this->sc_charset[$_SESSION['scriptcase']['charset']])) ? $this->sc_charset[$_SESSION['scriptcase']['charset']] : $_SESSION['scriptcase']['charset'];
      if (!function_exists("mb_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtmb'] . "</font></div>";exit;
      } 
      elseif (!function_exists("sc_convert_encoding"))
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_xtsc'] . "</font></div>";exit;
      } 
      foreach ($this->Nm_lang_conf_region as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_lang_conf_region[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
      foreach ($this->Nm_conf_reg[$this->str_conf_reg] as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_conf_reg[$this->str_conf_reg][$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
      foreach ($this->Nm_lang as $ind => $dados)
      {
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($ind))
         {
             $ind = sc_convert_encoding($ind, $_SESSION['scriptcase']['charset'], "UTF-8");
             $this->Nm_lang[$ind] = $dados;
         }
         if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($dados))
         {
             $this->Nm_lang[$ind] = sc_convert_encoding($dados, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
      }
      $_SESSION['sc_session']['SC_download_violation'] = $this->Nm_lang['lang_errm_fnfd'];
      if (isset($_SESSION['sc_session']['SC_parm_violation']))
      {
          unset($_SESSION['sc_session']['SC_parm_violation']);
          echo "<html>";
          echo "<body>";
          echo "<table align=\"center\" width=\"50%\" border=1 height=\"50px\">";
          echo "<tr>";
          echo "   <td align=\"center\">";
          echo "       <b><font size=4>" . $this->Nm_lang['lang_errm_ajax_data'] . "</font>";
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          echo "</body>";
          echo "</html>";
          exit;
      }
      if (isset($this->Nm_lang['lang_errm_dbcn_conn']))
      {
          $_SESSION['scriptcase']['db_conn_error'] = $this->Nm_lang['lang_errm_dbcn_conn'];
      }
      $PHP_ver = str_replace(".", "", phpversion()); 
      if (substr($PHP_ver, 0, 3) < 434)
      {
          echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_phpv'] . "</font></div>";exit;
      } 
      if (file_exists($this->path_libs . "/ver.dat"))
      {
          $SC_ver = file($this->path_libs . "/ver.dat"); 
          $SC_ver = str_replace(".", "", $SC_ver[0]); 
          if (substr($SC_ver, 0, 5) < 40015)
          {
              echo "<div><font size=6>" . $this->Nm_lang['lang_othr_prod_incp'] . "</font></div>";exit;
          } 
      } 
      $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['path_doc'] = $this->path_doc; 
      $_SESSION['scriptcase']['nm_path_prod'] = $this->root . $this->path_prod . "/"; 
      if (empty($this->path_imag_cab))
      {
          $this->path_imag_cab = $this->path_img_global;
      }
      if (!is_dir($this->root . $this->path_prod))
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #e6e6e6; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 3px 13px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_cmlb_nfnd'] . "</font>";
          echo "  " . $this->root . $this->path_prod;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_back'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = sc_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_back_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = sc_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
              else 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_exit'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = sc_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_exit_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = sc_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
          } 
          exit ;
      }

      $this->nm_ger_css_emb = true;
      $this->path_atual     = getcwd();
      $opsys = strtolower(php_uname());

// 
      include_once($this->path_aplicacao . "consulta_matricula_erro.class.php"); 
      $this->Erro = new consulta_matricula_erro();
      include_once($this->path_adodb . "/adodb.inc.php"); 
      $this->sc_Include($this->path_libs . "/nm_sec_prod.php", "F", "nm_reg_prod") ; 
      $this->sc_Include($this->path_libs . "/nm_ini_perfil.php", "F", "perfil_lib") ; 
// 
 if(function_exists('set_php_timezone')) set_php_timezone('consulta_matricula'); 
// 
      $this->sc_Include($this->path_lib_php . "/nm_functions.php", "", "") ; 
      $this->sc_Include($this->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $this->sc_Include($this->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->sc_Include($this->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->nm_data = new nm_data("pt_br");
      include("../_lib/css/" . $this->str_schema_all . "_grid.php");
      $this->Tree_img_col    = trim($str_tree_col);
      $this->Tree_img_exp    = trim($str_tree_exp);
      perfil_lib($this->path_libs);
      if (!isset($_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil']))
      {
          if(function_exists("nm_check_perfil_exists")) nm_check_perfil_exists($this->path_libs, $this->path_prod);
          $_SESSION['sc_session'][$this->sc_page]['SC_Check_Perfil'] = true;
      }
      if (function_exists("nm_check_pdf_server")) $this->server_pdf = nm_check_pdf_server($this->path_libs, $this->server_pdf);
      if (!isset($_SESSION['scriptcase']['sc_num_img']))
      { 
          $_SESSION['scriptcase']['sc_num_img'] = 1;
      } 
      $this->regionalDefault();
      $this->Str_btn_grid    = trim($str_button) . "/" . trim($str_button) . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
      $this->Str_btn_css     = trim($str_button) . "/" . trim($str_button) . ".css";
      include($this->path_btn . $this->Str_btn_grid);
      $_SESSION['scriptcase']['erro']['str_schema_dir'] = $this->str_schema_all . "_error" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->sc_tem_trans_banco = false;
      $this->nm_bases_access     = array("access", "ado_access");
      $this->nm_bases_db2        = array("db2", "db2_odbc", "odbc_db2", "odbc_db2v6");
      $this->nm_bases_ibase      = array("ibase", "firebird", "borland_ibase");
      $this->nm_bases_informix   = array("informix", "informix72", "pdo_informix");
      $this->nm_bases_mssql      = array("mssql", "ado_mssql", "odbc_mssql", "mssqlnative", "pdo_sqlsrv");
      $this->nm_bases_mysql      = array("mysql", "mysqlt", "maxsql", "pdo_mysql");
      $this->nm_bases_postgres   = array("postgres", "postgres64", "postgres7", "pdo_pgsql");
      $this->nm_bases_oracle     = array("oci8", "oci805", "oci8po", "odbc_oracle", "oracle");
      $this->nm_bases_sqlite     = array("sqlite", "sqlite3", "pdosqlite");
      $this->nm_bases_sybase     = array("sybase");
      $this->nm_bases_vfp        = array("vfp");
      $this->nm_bases_odbc       = array("odbc");
      $this->nm_bases_all        = array_merge($this->nm_bases_access, $this->nm_bases_db2, $this->nm_bases_ibase, $this->nm_bases_informix, $this->nm_bases_mssql, $this->nm_bases_mysql, $this->nm_bases_postgres, $this->nm_bases_oracle, $this->nm_bases_sqlite, $this->nm_bases_sybase, $this->nm_bases_vfp, $this->nm_bases_odbc);
      $this->nm_font_ttf = array("ar", "ja", "pl", "ru", "sk", "thai", "zh_cn", "zh_hk", "cz", "el", "ko", "mk");
      $this->nm_ttf_arab = array("ar");
      $this->nm_ttf_jap  = array("ja");
      $this->nm_ttf_rus  = array("pl", "ru", "sk", "cz", "el", "mk");
      $this->nm_ttf_thai = array("thai");
      $this->nm_ttf_chi  = array("zh_cn", "zh_hk", "ko");
      $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['seq_dir'] = 0; 
      $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['sub_dir'] = array(); 
      $_SESSION['scriptcase']['nm_bases_security']  = "enc_nm_enc_v1HQNmDuFaHANOD5FaDMBYVIB/HEFYVErqDcFYH9B/HArYHQXGDMveHEJGDWFqHIJsD9XsZ9JeD1BeD5F7DMvmVcBUDWFaHIF7HQBqVINUD1rwHuBOHgBeZSJqDWBmZuXGHQXGDQFUHANOHuF7DMBYVcBUHEX/VENUHQFYZ1BOD1rwHuFGDMveHEJqH5X/ZuB/HQXGDuFaHIBeHuB/HgvOVcB/DuX7HIrqDcBwH9B/HIrwV5JeDMBYDkBsH5FYHMBqHQJeH9BiHAN7HuJwDMBOZSNiDWF/HMB/HQFYZ1BOHIveHQraHgBYHENiDWB3ZuXGHQXGDuBqHANOHuBODMvsVcXKHEFYHMBOHQFYZkBiDSrYHQBqDMvCDkXKHEFqHIFGDcJUZSX7HIBeD5BqHgvsZSJ3H5B7DoBiHQNGVIraDSvmD5raHgrKHEXeDWB3DoNUD9XsDQFGHABYD5rqHuBYVcFKHEFYVorqD9BsZ1F7D1zGD5raHgrKHArCH5F/DoXGDcJUDQJsHArYV5BOHgrKV9FiDWXCVoFGD9JmZ1F7Z1BeZMBODEBODkFeDuX/DoNUD9FYDQX7Z1rwVWJwHgNKVcFKH5FqVoB/D9BsVIraHArKZMFaDErKZSXeH5FGDoNUDcBwDQX7DSBYVWJsHuvmVcFKDWFYVoX7DcBwZ1F7Z1BeV5BqDMrYHEBUH5F/VoJeDcBwDQX7Z1zGV5BiHgrKVIBOV5X7VoX7DcBwZ1F7HIrwV5JeDMBYZSXeDWFqVoBiD9NwZSX7DSBYD5NUHgrKZSJ3V5BmVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3HEB7ZuJsHQXOZSBiZ1N7HuFUDMzGVcXKH5B3DoXGHQBiZSBqHANOHQJeHgBYHErCDWFGVoFGHQFYH9FUHIrKHQNUDMvODkB/DWBmDoXGDcNmZkFGHIBeHQX7HgveVkJ3V5B7DoF7D9XsDQJsDSBYV5FGHgNKDkBsHEX/VEBiHQXOZSBOHArYHQX7DMveHErCV5B3VoFGHQXOZSFUDSBYHuJeHgvOVIB/DWXKDoXGHQXGZ1X7DSNOHuBOHgvsHArsH5FGVoFGHQFYH9FUHIvsVWJeDMrYZSNiH5XKVoBqD9BsZ1F7DSrYD5rqDMrYZSJ3DuX/ZuJsHQNwH9BiHABYHurqDMrYVIB/DuFGDoXGHQBiZSBOHAvsZMFaHgNOHEJqH5BmVoFGHQNwZSBiHIrwHuraHgvOZSNiH5B7DoXGHQNmH9BOHAN7HQJeHgBOHErCDuXKDoF7D9XsDQJsDSBYV5FGHgNKDkFCH5FqVoBqDcNwH9FaHArKD5NUDEvsHEFiDuJeDoFUHQXGZSX7Z1rwV5JeHuBYVcFiV5X7HIX7DcJUZ1FaD1rKHuBODMBYHEXeHEFaVoB/HQXGZSFGHAvCVWBODMvOV9FiV5X7VEF7D9BiH9FaHIBeD5XGDEBOZSXeV5FaZuFaHQXGZSFGD1BeV5FGHuzGVIBOHEFYVorqD9BiZ1F7D1rwD5NUDErKZSXeH5FGDoB/DcJUZSX7HIBeD5BqHgvsZSJ3H5FqVoFGDcBqH9BOZ1BeV5XGDEBOZSJGH5FYZuFaDcXOZSFGHIrwD5JwHuvmV9FiV5F/VoX7DcJUZ1B/D1rwV5JeDMzGVkXeH5FGVoBiD9JKDQX7HAN7V5JeHgrKV9FiV5F/DoJeD9BsH9B/D1rwD5NUDEBOHErCDWF/VoBiDcJUZSX7Z1BYHuFaDMzGV9BUH5FqVErqHQXOVIJsHArKD5NUDMvCHEJqHEB7DoXGDcXGDuFaHIBeVWJeDMNOVcFeDWFaHMBiD9BsVIraD1rwV5X7HgBeHEFKV5FaDoF7D9XsZSX7Z1N7V5BqHuBYVcBODuFqVENUDcBqZ1BOZ1BeV5X7DMBYHEJGH5F/DoJeD9JKDQX7D1BeVWJwHuNOVcFKDWXKDoJsD9XOZ1F7HIveD5BqHgBeHEFiV5B3DoF7D9XsDuFaHAveHuFaHuNOZSrCH5FqDoXGHQJmZ1BiHIBeHQBiDMveVkJ3V5FaVoJeHQXODQX7HAN7V5FaDMzGVIBODur/DoFGHQBiH9B/DSBOZMBOHgBOZSJ3DWF/VoBiDcJUZSX7Z1BYHuFaHgrKVcFCDWXCVoJwDcJUH9B/Z1BeV5FGDMzGHErCDWF/VoBiDcJUZSX7Z1BYHuFaDMvOZSNiDWB3VoF7HQBqZkBiHAzGD5XGHgveHErsDWXCHIJsD9XsZ9JeD1BeD5F7DMvmVcrsDur/HMFaHQNmZSB/DSNOV5B/DErKHEBUH5FYDoFUDcXGDQJsHANOHuFaHuNOZSrCH5FqDoXGHQJmZ1FGDSrYHQraHgNOHErCH5FGDoNUHQXGDuBOHAveHuFGHuNOVIFCH5FqVENUD9JmZ1FaD1rKZMFaDEvsHEFiV5XKDoNUHQXsH9X7HABYD5JsHgrKVcFCDWJeVoB/D9BsZ1FUHArKV5B/DMzGHAFKDWF/HIFUDcBwDQJwD1vOD5NUHgNKVcFeH5FqDoFGVQJmVIraZ1vmD5raDMvCHEFiDWFqDoF7HQXGZ9JeHAveD5JsHgrKV9FiDWXCHIBiHQBsZkFGHArKV5FUDMrYZSXeV5FqHIJsHQJeDQBOZ1vCV5Je";
      ob_start();
      $this->prep_conect();
      $this->conectDB();
      if (!in_array(strtolower($this->nm_tpbanco), $this->nm_bases_all))
      {
          echo "<tr>";
          echo "   <td bgcolor=\"\">";
          echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nspt'] . "</font>";
          echo "  " . $perfil_trab;
          echo "   </b></td>";
          echo " </tr>";
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
                  echo "<a href='" . $_SESSION['scriptcase']['nm_sc_retorno'] . "' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase8_BlueWood_bvoltar.gif' title='" . $this->Nm_lang['lang_btns_rtrn_scrp_hint'] . "' align=absmiddle></a> \n" ; 
              } 
              else 
              { 
                  echo "<a href='$nm_url_saida' target='_self'><img border='0' src='" . $this->path_botoes . "/nm_scriptcase8_BlueWood_bsair.gif' title='" . $this->Nm_lang['lang_btns_exit_appl_hint'] . "' align=absmiddle></a> \n" ; 
              } 
          } 
          exit ;
      } 
      $this->Ajax_result_set = ob_get_contents();
      ob_end_clean();
      if (empty($this->nm_tabela))
      {
          $this->nm_tabela = ""; 
      }
   }

   function getRunningOS()
   {
       $aOSInfo = array();

       if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
       {
           $aOSInfo['os'] = 'win';
       }
       elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
       {
           $aOSInfo['os'] = 'linux-i386';
           if(strpos(strtolower(php_uname()), 'x86_64') !== FALSE) 
            {
               $aOSInfo['os'] = 'linux-amd64';
            }
       }
       elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
       {
           $aOSInfo['os'] = 'macos';
       }

       return $aOSInfo;
   }

   function prep_conect()
   {
      if (isset($_SESSION['scriptcase']['sc_connection']) && !empty($_SESSION['scriptcase']['sc_connection']))
      {
          foreach ($_SESSION['scriptcase']['sc_connection'] as $NM_con_orig => $NM_con_dest)
          {
              if (isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']) && $_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil']) && $_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil'] == $NM_con_orig)
              {
/*NM*/            $_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil'] = $NM_con_dest;
              }
              if (isset($_SESSION['scriptcase']['consulta_matricula']['glo_con_' . $NM_con_orig]))
              {
                  $_SESSION['scriptcase']['consulta_matricula']['glo_con_' . $NM_con_orig] = $NM_con_dest;
              }
          }
      }
      $con_devel             = (isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao'])) ? $_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao'] : ""; 
      $perfil_trab           = ""; 
      $this->nm_falta_var    = ""; 
      $this->nm_falta_var_db = ""; 
      $nm_crit_perfil        = false;
      if (isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']))
      {
          db_conect_devel($con_devel, $this->root . $this->path_prod, 'SAE', 2); 
          if (empty($_SESSION['scriptcase']['glo_tpbanco']) && empty($_SESSION['scriptcase']['glo_banco']))
          {
              $nm_crit_perfil = true;
          }
      }
      if (isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil']) && !empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['consulta_matricula']['glo_nm_perfil'];
      }
      elseif (isset($_SESSION['scriptcase']['glo_perfil']) && !empty($_SESSION['scriptcase']['glo_perfil']))
      {
          $perfil_trab = $_SESSION['scriptcase']['glo_perfil'];
      }
      if (!empty($perfil_trab))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = "";
          carrega_perfil($perfil_trab, $this->path_libs, "S", $this->path_conf);
          if (empty($_SESSION['scriptcase']['glo_senha_protect']))
          {
              $nm_crit_perfil = true;
          }
      }
      else
      {
          $perfil_trab = $con_devel;
      }
      if (!isset($_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['embutida_init']) || !$_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['embutida_init']) 
      {
          if (!isset($_SESSION['id_aluno'])) 
          {
              $this->nm_falta_var .= "id_aluno; ";
          }
          if (!isset($_SESSION['situacao_aluno'])) 
          {
              $this->nm_falta_var .= "situacao_aluno; ";
          }
      }
// 
      if (!isset($_SESSION['scriptcase']['glo_tpbanco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_tpbanco; ";
          }
      }
      else
      {
          $this->nm_tpbanco = $_SESSION['scriptcase']['glo_tpbanco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_servidor']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_servidor; ";
          }
      }
      else
      {
          $this->nm_servidor = $_SESSION['scriptcase']['glo_servidor']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_banco']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_banco; ";
          }
      }
      else
      {
          $this->nm_banco = $_SESSION['scriptcase']['glo_banco']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_usuario']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_usuario; ";
          }
      }
      else
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_usuario']; 
      }
      if (!isset($_SESSION['scriptcase']['glo_senha']))
      {
          if (!$nm_crit_perfil)
          {
              $this->nm_falta_var_db .= "glo_senha; ";
          }
      }
      else
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_senha']; 
      }
      if (isset($_SESSION['scriptcase']['glo_database_encoding']))
      {
          $this->nm_database_encoding = $_SESSION['scriptcase']['glo_database_encoding']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_autocommit']))
      {
          $this->nm_con_db2['db2_autocommit'] = $_SESSION['scriptcase']['glo_db2_autocommit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_lib']))
      {
          $this->nm_con_db2['db2_i5_lib'] = $_SESSION['scriptcase']['glo_db2_i5_lib']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_naming']))
      {
          $this->nm_con_db2['db2_i5_naming'] = $_SESSION['scriptcase']['glo_db2_i5_naming']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_commit']))
      {
          $this->nm_con_db2['db2_i5_commit'] = $_SESSION['scriptcase']['glo_db2_i5_commit']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db2_i5_query_optimize']))
      {
          $this->nm_con_db2['db2_i5_query_optimize'] = $_SESSION['scriptcase']['glo_db2_i5_query_optimize']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_persistent']))
      {
          $this->nm_con_persistente = $_SESSION['scriptcase']['glo_use_persistent']; 
      }
      if (isset($_SESSION['scriptcase']['glo_use_schema']))
      {
          $this->nm_con_use_schema = $_SESSION['scriptcase']['glo_use_schema']; 
      }
      $this->date_delim  = "'";
      $this->date_delim1 = "'";
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_access))
      {
          $this->date_delim  = "#";
          $this->date_delim1 = "#";
      }
      if (isset($_SESSION['scriptcase']['glo_decimal_db']) && !empty($_SESSION['scriptcase']['glo_decimal_db']))
      {
          $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['decimal_db'] = $_SESSION['scriptcase']['glo_decimal_db']; 
      }
      if (isset($_SESSION['scriptcase']['glo_date_separator']) && !empty($_SESSION['scriptcase']['glo_date_separator']))
      {
          $SC_temp = trim($_SESSION['scriptcase']['glo_date_separator']);
          if (strlen($SC_temp) == 2)
          {
              $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date']  = substr($SC_temp, 0, 1); 
              $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date1'] = substr($SC_temp, 1, 1); 
          }
          else
           {
              $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date']  = $SC_temp; 
              $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date1'] = $SC_temp; 
          }
          $this->date_delim  = $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date'];
          $this->date_delim1 = $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date1'];
      }
// 
      if (!empty($this->nm_falta_var) || !empty($this->nm_falta_var_db) || $nm_crit_perfil)
      {
          echo "<style type=\"text/css\">";
          echo ".scButton_default { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_disabled { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #7d7d7d; font-weight: normal; background-color: #e6e6e6; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmousedown { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_onmouseover { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #5D6D7E; border-style: solid; border-width: 1px; padding: 8px 10px;  }";
          echo ".scButton_small { font-family: Tahoma, Arial, sans-serif; font-size: 13px; color: #FFFFFF; font-weight: normal; background-color: #34495E; border-style: solid; border-width: 1px; padding: 3px 13px;  }";
          echo ".scLink_default { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:visited { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:active { text-decoration: underline; font-size: 12px; color: #0000AA;  }";
          echo ".scLink_default:hover { text-decoration: none; font-size: 12px; color: #0000AA;  }";
          echo "</style>";
          echo "<table width=\"80%\" border=\"1\" height=\"117\">";
          if (empty($this->nm_falta_var_db))
          {
              if (!empty($this->nm_falta_var))
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_glob'] . "</font>";
                  echo "  " . $this->nm_falta_var;
                  echo "   </b></td>";
                  echo " </tr>";
              }
              if ($nm_crit_perfil)
              {
                  echo "<tr>";
                  echo "   <td bgcolor=\"\">";
                  echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_nfnd'] . "</font>";
                  echo "  " . $perfil_trab;
                  echo "   </b></td>";
                  echo " </tr>";
              }
          }
          else
          {
              echo "<tr>";
              echo "   <td bgcolor=\"\">";
              echo "       <b><font size=\"4\">" . $this->Nm_lang['lang_errm_dbcn_data'] . "</font></b>";
              echo "   </td>";
              echo " </tr>";
          }
          echo "</table>";
          if (!$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'] && (!isset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan']) || !$_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan'])) 
          { 
              if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno'])) 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_back'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = sc_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_back_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = sc_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $_SESSION['scriptcase']['nm_sc_retorno'] ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
              else 
              { 
               $btn_value = "" . $this->Ini->Nm_lang['lang_btns_exit'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_value))
               {
                   $btn_value = sc_convert_encoding($btn_value, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
               $btn_hint = "" . $this->Ini->Nm_lang['lang_btns_exit_hint'] . "";
               if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($btn_hint))
               {
                   $btn_hint = sc_convert_encoding($btn_hint, $_SESSION['scriptcase']['charset'], "UTF-8");
               }
?>
                   <input type="button" id="sai" onClick="window.location='<?php echo $nm_url_saida ?>'; return false" class="scButton_default" value="<?php echo $btn_value ?>" title="<?php echo $btn_hint ?>" style="vertical-align: middle;">

<?php
              } 
          } 
          exit ;
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_usr']) && !empty($_SESSION['scriptcase']['glo_db_master_usr']))
      {
          $this->nm_usuario = $_SESSION['scriptcase']['glo_db_master_usr']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_pass']) && !empty($_SESSION['scriptcase']['glo_db_master_pass']))
      {
          $this->nm_senha = $_SESSION['scriptcase']['glo_db_master_pass']; 
      }
      if (isset($_SESSION['scriptcase']['glo_db_master_cript']) && !empty($_SESSION['scriptcase']['glo_db_master_cript']))
      {
          $_SESSION['scriptcase']['glo_senha_protect'] = $_SESSION['scriptcase']['glo_db_master_cript']; 
      }
   }
   function conectDB()
   {
      global $glo_senha_protect;
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && isset($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']) && !empty($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao']))
      { 
          $this->Db = db_conect_devel($_SESSION['scriptcase']['consulta_matricula']['glo_nm_conexao'], $this->root . $this->path_prod, 'SAE'); 
      } 
      else 
      { 
          $this->Db = db_conect($this->nm_tpbanco, $this->nm_servidor, $this->nm_usuario, $this->nm_senha, $this->nm_banco, $glo_senha_protect, "S", $this->nm_con_persistente, $this->nm_con_db2, $this->nm_database_encoding); 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_ibase))
      {
          if (function_exists('ibase_timefmt'))
          {
              ibase_timefmt('%Y-%m-%d %H:%M:%S');
          } 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_sybase))
      {
          $this->Db->fetchMode = ADODB_FETCH_BOTH;
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_mssql))
      {
          $this->Db->Execute("set dateformat ymd");
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_oracle))
      {
          $this->Db->Execute("alter session set nls_date_format = 'yyyy-mm-dd hh24:mi:ss'");
          $this->Db->Execute("alter session set nls_numeric_characters = '.,'");
          $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['decimal_db'] = "."; 
      } 
      if (in_array(strtolower($this->nm_tpbanco), $this->nm_bases_postgres))
      {
          $this->Db->Execute("SET DATESTYLE TO ISO");
      } 
   }
   function regionalDefault()
   {
       $_SESSION['scriptcase']['reg_conf']['date_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_format'] : "ddmmyyyy";
       $_SESSION['scriptcase']['reg_conf']['date_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['data_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['data_sep'] : "/";
       $_SESSION['scriptcase']['reg_conf']['date_week_ini'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['prim_dia_sema'] : "SU";
       $_SESSION['scriptcase']['reg_conf']['time_format']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_format']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_format'] : "hhiiss";
       $_SESSION['scriptcase']['reg_conf']['time_sep']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_sep']))                 ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_sep'] : ":";
       $_SESSION['scriptcase']['reg_conf']['time_pos_ampm'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_pos_ampm'] : "right_without_space";
       $_SESSION['scriptcase']['reg_conf']['time_simb_am']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_am'] : "am";
       $_SESSION['scriptcase']['reg_conf']['time_simb_pm']  = (isset($this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm']))          ?  $this->Nm_conf_reg[$this->str_conf_reg]['hora_simbolo_pm'] : "pm";
       $_SESSION['scriptcase']['reg_conf']['simb_neg']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg']))            ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sinal_neg'] : "-";
       $_SESSION['scriptcase']['reg_conf']['grup_num']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['neg_num']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_format_num_neg'] : 2;
       $_SESSION['scriptcase']['reg_conf']['monet_simb']    = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_simbolo'] : "R$";
       $_SESSION['scriptcase']['reg_conf']['monet_f_pos']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_pos'] : 3;
       $_SESSION['scriptcase']['reg_conf']['monet_f_neg']   = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_format_num_neg'] : 13;
       $_SESSION['scriptcase']['reg_conf']['grup_val']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_agr'] : ".";
       $_SESSION['scriptcase']['reg_conf']['dec_val']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec']))        ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_sep_dec'] : ",";
       $_SESSION['scriptcase']['reg_conf']['html_dir']      = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  " DIR='" . $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] . "'" : "";
       $_SESSION['scriptcase']['reg_conf']['css_dir']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl']))              ?  $this->Nm_conf_reg[$this->str_conf_reg]['ger_ltr_rtl'] : "LTR";
       $_SESSION['scriptcase']['reg_conf']['num_group_digit']       = (isset($this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit']))       ?  $this->Nm_conf_reg[$this->str_conf_reg]['num_group_digit'] : "1";
       $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'] = (isset($this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'])) ?  $this->Nm_conf_reg[$this->str_conf_reg]['unid_mont_group_digit'] : "1";
   }
// 
   function sc_Include($path, $tp, $name)
   {
       if ((empty($tp) && empty($name)) || ($tp == "F" && !function_exists($name)) || ($tp == "C" && !class_exists($name)))
       {
           include_once($path);
       }
   } // sc_Include
   function sc_Sql_Protect($var, $tp, $conex="")
   {
       if (empty($conex) || $conex == "conn_mysql")
       {
           $TP_banco = $_SESSION['scriptcase']['glo_tpbanco'];
       }
       else
       {
           eval ("\$TP_banco = \$this->nm_con_" . $conex . "['tpbanco'];");
       }
       if ($tp == "date")
       {
           $delim  = "'";
           $delim1 = "'";
           if (in_array(strtolower($TP_banco), $this->nm_bases_access))
           {
               $delim  = "#";
               $delim1 = "#";
           }
           if (isset($_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date']))
           {
               $delim  = $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date'];
               $delim1 = $_SESSION['sc_session'][$this->sc_page]['consulta_matricula']['SC_sep_date1'];
           }
           return $delim . $var . $delim1;
       }
       else
       {
           return $var;
       }
   } // sc_Sql_Protect
}
//===============================================================================
//
class consulta_matricula_apl
{
   var $Ini;
   var $Erro;
   var $Db;
   var $Lookup;
   var $nm_location;
//
//----- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini = $this->Ini;
      $this->$modulo->Db = $this->Db;
      $this->$modulo->Erro = $this->Erro;
   }
//
//----- 
   function controle()
   {
      global $nm_saida, $nm_url_saida, $script_case_init, $glo_senha_protect;

      $this->Ini = new consulta_matricula_ini(); 
      $this->Ini->init();
      $this->Change_Menu = false;
      if (isset($_SESSION['scriptcase']['menu_atual']) && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_matricula']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['consulta_matricula']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['consulta_matricula']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['consulta_matricula'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['consulta_matricula']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['consulta_matricula']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('consulta_matricula') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['consulta_matricula']['label'] = "" . $this->Ini->Nm_lang['lang_othr_blank_title'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "consulta_matricula")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['consulta_matricula']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['consulta_matricula']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['consulta_matricula']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";

      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      nm_gc($this->Ini->path_libs);
      $this->nm_data = new nm_data("pt_br");
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                  $this->Ini->Nm_lang['lang_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_mnth_june'],
                                  $this->Ini->Nm_lang['lang_mnth_july'],
                                  $this->Ini->Nm_lang['lang_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                  $this->Ini->Nm_lang['lang_days_sund'],
                                  $this->Ini->Nm_lang['lang_days_mond'],
                                  $this->Ini->Nm_lang['lang_days_tued'],
                                  $this->Ini->Nm_lang['lang_days_wend'],
                                  $this->Ini->Nm_lang['lang_days_thud'],
                                  $this->Ini->Nm_lang['lang_days_frid'],
                                  $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                  $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                  $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                  $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                  $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                  $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                  $this->Ini->Nm_lang['lang_shrt_days_satd']);
      $this->Db = $this->Ini->Db; 
      include_once($this->Ini->path_aplicacao . "consulta_matricula_erro.class.php"); 
      $this->Erro      = new consulta_matricula_erro();
      $this->Erro->Ini = $this->Ini;
//
      $_SESSION['scriptcase']['consulta_matricula']['contr_erro'] = 'on';
if (!isset($_SESSION['id_aluno'])) {$_SESSION['id_aluno'] = "";}
if (!isset($this->sc_temp_id_aluno)) {$this->sc_temp_id_aluno = (isset($_SESSION['id_aluno'])) ? $_SESSION['id_aluno'] : "";}
if (!isset($_SESSION['celular'])) {$_SESSION['celular'] = "";}
if (!isset($this->sc_temp_celular)) {$this->sc_temp_celular = (isset($_SESSION['celular'])) ? $_SESSION['celular'] : "";}
if (!isset($_SESSION['turno'])) {$_SESSION['turno'] = "";}
if (!isset($this->sc_temp_turno)) {$this->sc_temp_turno = (isset($_SESSION['turno'])) ? $_SESSION['turno'] : "";}
if (!isset($_SESSION['curso'])) {$_SESSION['curso'] = "";}
if (!isset($this->sc_temp_curso)) {$this->sc_temp_curso = (isset($_SESSION['curso'])) ? $_SESSION['curso'] : "";}
if (!isset($_SESSION['matricula'])) {$_SESSION['matricula'] = "";}
if (!isset($this->sc_temp_matricula)) {$this->sc_temp_matricula = (isset($_SESSION['matricula'])) ? $_SESSION['matricula'] : "";}
if (!isset($_SESSION['email'])) {$_SESSION['email'] = "";}
if (!isset($this->sc_temp_email)) {$this->sc_temp_email = (isset($_SESSION['email'])) ? $_SESSION['email'] : "";}
if (!isset($_SESSION['cpf'])) {$_SESSION['cpf'] = "";}
if (!isset($this->sc_temp_cpf)) {$this->sc_temp_cpf = (isset($_SESSION['cpf'])) ? $_SESSION['cpf'] : "";}
if (!isset($_SESSION['nome'])) {$_SESSION['nome'] = "";}
if (!isset($this->sc_temp_nome)) {$this->sc_temp_nome = (isset($_SESSION['nome'])) ? $_SESSION['nome'] : "";}
if (!isset($_SESSION['situacao_aluno'])) {$_SESSION['situacao_aluno'] = "";}
if (!isset($this->sc_temp_situacao_aluno)) {$this->sc_temp_situacao_aluno = (isset($_SESSION['situacao_aluno'])) ? $_SESSION['situacao_aluno'] : "";}
if (!isset($_SESSION['global_consulta'])) {$_SESSION['global_consulta'] = "";}
if (!isset($this->sc_temp_global_consulta)) {$this->sc_temp_global_consulta = (isset($_SESSION['global_consulta'])) ? $_SESSION['global_consulta'] : "";}
 $matricula = $this->sc_temp_global_consulta;
										
$curl = curl_init(); 

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: TH5vTtMRJGy4tnGjft2swpKFbwzhkMgYZ4b9AFR9SGjXCxzUbq')); 

curl_setopt($curl, CURLOPT_URL,"http://api.ifpe.edu.br/qacademico/student/".$matricula); 

curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

										
$response = json_decode(curl_exec($curl));

curl_close($curl); 

if ($response) {
	$this->sc_temp_situacao_aluno = utf8_decode($response->enrollmentStatus);
	
	$nome = $this->sc_temp_nome = utf8_decode($response->fullName);
	$cpf = $this->sc_temp_cpf = utf8_decode($response->brCPF);
	$email = $this->sc_temp_email = utf8_decode($response->email);
	$matricula = $this->sc_temp_matricula = utf8_decode($response->enrollment);
	$curso = $this->sc_temp_curso = utf8_decode($response->courseName);
	$turno = $this->sc_temp_turno = utf8_decode($response->shift);
	$celular = $this->sc_temp_celular = utf8_decode($response->cellphone);

	 
      $nm_select = "select id_aluno from aluno where matricula = '$matricula'"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->verifica_cadastro = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->verifica_cadastro[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->verifica_cadastro = false;
          $this->verifica_cadastro_erro = $this->Db->ErrorMsg();
      } 
;
	if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

	
	if(empty($this->verifica_cadastro )){ 
		
     $nm_select = "insert into aluno   						  (nome_aluno, curso, turno, matricula, cpf, celular, email)   						  values  						  ('$nome', '$curso', '$turno', '$matricula', '$cpf', '$celular', '$email')"; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;	

		if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

		
		 
      $nm_select = "select id_aluno from aluno where matricula = '$matricula'"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->id_aluno = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        $this->id_aluno[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->id_aluno = false;
          $this->id_aluno_erro = $this->Db->ErrorMsg();
      } 
;
		if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

		
		$this->sc_temp_id_aluno = $this->id_aluno[0][0];
		 if (isset($this->sc_temp_global_consulta)) {$_SESSION['global_consulta'] = $this->sc_temp_global_consulta;}
 if (isset($this->sc_temp_situacao_aluno)) {$_SESSION['situacao_aluno'] = $this->sc_temp_situacao_aluno;}
 if (isset($this->sc_temp_nome)) {$_SESSION['nome'] = $this->sc_temp_nome;}
 if (isset($this->sc_temp_cpf)) {$_SESSION['cpf'] = $this->sc_temp_cpf;}
 if (isset($this->sc_temp_email)) {$_SESSION['email'] = $this->sc_temp_email;}
 if (isset($this->sc_temp_matricula)) {$_SESSION['matricula'] = $this->sc_temp_matricula;}
 if (isset($this->sc_temp_curso)) {$_SESSION['curso'] = $this->sc_temp_curso;}
 if (isset($this->sc_temp_turno)) {$_SESSION['turno'] = $this->sc_temp_turno;}
 if (isset($this->sc_temp_celular)) {$_SESSION['celular'] = $this->sc_temp_celular;}
 if (isset($this->sc_temp_id_aluno)) {$_SESSION['id_aluno'] = $this->sc_temp_id_aluno;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('form_aluno') . "/", $this->nm_location, "","_self", 440, 630, "ret_self");
 };

	}else{
		
     $nm_select = "update aluno   						  set nome_aluno = '$nome',  						  	  curso = '$curso',  							  turno = '$turno',  							  matricula = '$matricula',  							  cpf = '$cpf',  							  celular = '$celular',  							  email = '$email'  						   where matricula = '$matricula'"; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      ;
		if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

		
		$this->sc_temp_id_aluno = $this->verifica_cadastro[0][0];

		 if (isset($this->sc_temp_global_consulta)) {$_SESSION['global_consulta'] = $this->sc_temp_global_consulta;}
 if (isset($this->sc_temp_situacao_aluno)) {$_SESSION['situacao_aluno'] = $this->sc_temp_situacao_aluno;}
 if (isset($this->sc_temp_nome)) {$_SESSION['nome'] = $this->sc_temp_nome;}
 if (isset($this->sc_temp_cpf)) {$_SESSION['cpf'] = $this->sc_temp_cpf;}
 if (isset($this->sc_temp_email)) {$_SESSION['email'] = $this->sc_temp_email;}
 if (isset($this->sc_temp_matricula)) {$_SESSION['matricula'] = $this->sc_temp_matricula;}
 if (isset($this->sc_temp_curso)) {$_SESSION['curso'] = $this->sc_temp_curso;}
 if (isset($this->sc_temp_turno)) {$_SESSION['turno'] = $this->sc_temp_turno;}
 if (isset($this->sc_temp_celular)) {$_SESSION['celular'] = $this->sc_temp_celular;}
 if (isset($this->sc_temp_id_aluno)) {$_SESSION['id_aluno'] = $this->sc_temp_id_aluno;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('form_aluno') . "/", $this->nm_location, "","_self", 440, 630, "ret_self");
 };
	}

}else{ 
	echo "<script> alert('Verifique a matrícula!');</script>";
	echo "Error: " . curl_error($curl) . " - Code: " . curl_errno($curl); 
	 if (isset($this->sc_temp_global_consulta)) {$_SESSION['global_consulta'] = $this->sc_temp_global_consulta;}
 if (isset($this->sc_temp_situacao_aluno)) {$_SESSION['situacao_aluno'] = $this->sc_temp_situacao_aluno;}
 if (isset($this->sc_temp_nome)) {$_SESSION['nome'] = $this->sc_temp_nome;}
 if (isset($this->sc_temp_cpf)) {$_SESSION['cpf'] = $this->sc_temp_cpf;}
 if (isset($this->sc_temp_email)) {$_SESSION['email'] = $this->sc_temp_email;}
 if (isset($this->sc_temp_matricula)) {$_SESSION['matricula'] = $this->sc_temp_matricula;}
 if (isset($this->sc_temp_curso)) {$_SESSION['curso'] = $this->sc_temp_curso;}
 if (isset($this->sc_temp_turno)) {$_SESSION['turno'] = $this->sc_temp_turno;}
 if (isset($this->sc_temp_celular)) {$_SESSION['celular'] = $this->sc_temp_celular;}
 if (isset($this->sc_temp_id_aluno)) {$_SESSION['id_aluno'] = $this->sc_temp_id_aluno;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('control_aluno') . "/", $this->nm_location, "","_self", 440, 630, "ret_self");
 };
}
if (isset($this->sc_temp_global_consulta)) {$_SESSION['global_consulta'] = $this->sc_temp_global_consulta;}
if (isset($this->sc_temp_situacao_aluno)) {$_SESSION['situacao_aluno'] = $this->sc_temp_situacao_aluno;}
if (isset($this->sc_temp_nome)) {$_SESSION['nome'] = $this->sc_temp_nome;}
if (isset($this->sc_temp_cpf)) {$_SESSION['cpf'] = $this->sc_temp_cpf;}
if (isset($this->sc_temp_email)) {$_SESSION['email'] = $this->sc_temp_email;}
if (isset($this->sc_temp_matricula)) {$_SESSION['matricula'] = $this->sc_temp_matricula;}
if (isset($this->sc_temp_curso)) {$_SESSION['curso'] = $this->sc_temp_curso;}
if (isset($this->sc_temp_turno)) {$_SESSION['turno'] = $this->sc_temp_turno;}
if (isset($this->sc_temp_celular)) {$_SESSION['celular'] = $this->sc_temp_celular;}
if (isset($this->sc_temp_id_aluno)) {$_SESSION['id_aluno'] = $this->sc_temp_id_aluno;}
$_SESSION['scriptcase']['consulta_matricula']['contr_erro'] = 'off'; 
//--- 
       $this->Db->Close(); 
       if ($this->Change_Menu)
       {
           $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
           $Arr_rastro = array();
           if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
           {
               foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
               {
                  $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
               }
               $ult_apl = count($Arr_rastro) - 1;
               unset($Arr_rastro[$ult_apl]);
               $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
           }
           else
           {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
           }
       }
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
?>
              <HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
               <HEAD>
                <TITLE></TITLE>
               <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
           if ($_SESSION['scriptcase']['proc_mobile'])
           {
?>
                <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
           }
?>
                <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>                <META http-equiv="Pragma" content="no-cache"/>
                <script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery/js/jquery.js"></script>
                <script type="text/javascript">var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';</script>
                <script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></script>
                <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
                <script type="text/javascript"><?php echo $this->redir_modal ?></script>
               </HEAD>
              </HTML>
<?php
       } 
       exit;
   } 
   function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $alt_modal=0, $larg_modal=0, $opc="")
   {
      if (is_array($nm_apl_parms))
      {
          $tmp_parms = "";
          foreach ($nm_apl_parms as $par => $val)
          {
              $par = trim($par);
              $val = trim($val);
              $tmp_parms .= str_replace(".", "_", $par) . "?#?";
              if (substr($val, 0, 1) == "$")
              {
                  $tmp_parms .= $$val;
              }
              elseif (substr($val, 0, 1) == "{")
              {
                  $val        = substr($val, 1, -1);
                  $tmp_parms .= $this->$val;
              }
              elseif (substr($val, 0, 1) == "[")
              {
                  $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_matricula'][substr($val, 1, -1)];
              }
              else
              {
                  $tmp_parms .= $val;
              }
              $tmp_parms .= "?@?";
          }
          $nm_apl_parms = $tmp_parms;
      }
      $target = (empty($nm_target)) ? "_self" : $nm_target;
      if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
      {
          echo "<SCRIPT language=\"javascript\">";
          if (strtolower($target) == "_blank")
          {
              echo "window.open ('" . $nm_apl_dest . "');";
          }
          else
          {
              echo "window.location='" . $nm_apl_dest . "';";
          }
          echo "</SCRIPT>";
          exit;
      }
      $dir = explode("/", $nm_apl_dest);
      if (count($dir) == 1)
      {
          $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
          $nm_apl_dest = $this->Ini->path_link . $nm_apl_dest . "/" . $nm_apl_dest . ".php";
      }
      if ($nm_target == "modal")
      {
          if (!empty($nm_apl_parms))
          {
              $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
              $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
              $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
          }
          $par_modal = "?script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
          $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
          return;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['consulta_matricula']['iframe_print']) && $_SESSION['sc_session'][$this->Ini->sc_page]['consulta_matricula']['iframe_print'] )
      {
          $target = "_parent";
      }
   ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
      <HTML>
      <HEAD>
      <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
      if ($_SESSION['scriptcase']['proc_mobile'])
      {
?>
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
      }
?>
       <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
       <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
       <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
       <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
       <META http-equiv="Pragma" content="no-cache"/>
      </HEAD>
      <BODY>
   <form name="Fredir" method="post" 
                     target="_self"> 
     <input type="hidden" name="nmgp_parms" value="<?php echo NM_encode_input($nm_apl_parms) ?>"/>
<?php
   if ($target == "_blank")
   {
?>
       <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
     <input type="hidden" name="nmgp_url_saida" value="<?php echo NM_encode_input($nm_apl_retorno) ?>">
     <input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page) ?>"/> 
     <input type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id());?>" />
<?php
   }
?>
   </form> 
      <SCRIPT language="javascript">
          document.Fredir.target = "<?php echo $target ?>"; 
          document.Fredir.action = "<?php echo $nm_apl_dest ?>";
          document.Fredir.submit();
      </SCRIPT>
      </BODY>
      </HTML>
   <?php
      if ($target != "_blank")
      {
          exit;
      }
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
} 
// 
//======= =========================
   if (!function_exists("NM_is_utf8"))
   {
       include_once("../_lib/lib/php/nm_utf8.php");
   }
   if (!function_exists("SC_dir_app_ini"))
   {
       include_once("../_lib/lib/php/nm_ctrl_app_name.php");
   }
   SC_dir_app_ini('SAE');
   $_SESSION['scriptcase']['consulta_matricula']['contr_erro'] = 'off';
   $Sc_lig_md5 = false;
   if (!empty($_POST))
   {
       foreach ($_POST as $nmgp_var => $nmgp_val)
       {
            if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
            {
                $nmgp_var = substr($nmgp_var, 11);
                $nmgp_val = $_SESSION[$nmgp_val];
            }
            if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
            {
                $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                 if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                 {
                     $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                     $Sc_lig_md5 = true;
                 }
                 else
                 {
                     $_SESSION['sc_session']['SC_parm_violation'] = true;
                 }
            }
            nm_limpa_str_consulta_matricula($nmgp_val);
            $$nmgp_var = $nmgp_val;
       }
   }
   if (!empty($_GET))
   {
       foreach ($_GET as $nmgp_var => $nmgp_val)
       {
            if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
            {
                $nmgp_var = substr($nmgp_var, 11);
                $nmgp_val = $_SESSION[$nmgp_val];
            }
            if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
            {
                $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                 if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                 {
                     $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                     $Sc_lig_md5 = true;
                 }
                 else
                 {
                     $_SESSION['sc_session']['SC_parm_violation'] = true;
                 }
            }
            nm_limpa_str_consulta_matricula($nmgp_val);
            $$nmgp_var = $nmgp_val;
       }
   }
   if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
   {
       $_SESSION['sc_session']['SC_parm_violation'] = true;
   }
   if (isset($_POST["global_consulta"])) 
   {
       $_SESSION["global_consulta"] = $_POST["global_consulta"];
       nm_limpa_str_consulta_matricula($_SESSION["global_consulta"]);
   }
   if (isset($_GET["global_consulta"])) 
   {
       $_SESSION["global_consulta"] = $_GET["global_consulta"];
       nm_limpa_str_consulta_matricula($_SESSION["global_consulta"]);
   }
   if (!isset($_SESSION["global_consulta"])) 
   {
       $_SESSION["global_consulta"] = "";
   }
   if (isset($_POST["nome"])) 
   {
       $_SESSION["nome"] = $_POST["nome"];
       nm_limpa_str_consulta_matricula($_SESSION["nome"]);
   }
   if (isset($_GET["nome"])) 
   {
       $_SESSION["nome"] = $_GET["nome"];
       nm_limpa_str_consulta_matricula($_SESSION["nome"]);
   }
   if (!isset($_SESSION["nome"])) 
   {
       $_SESSION["nome"] = "";
   }
   if (isset($_POST["cpf"])) 
   {
       $_SESSION["cpf"] = $_POST["cpf"];
       nm_limpa_str_consulta_matricula($_SESSION["cpf"]);
   }
   if (isset($_GET["cpf"])) 
   {
       $_SESSION["cpf"] = $_GET["cpf"];
       nm_limpa_str_consulta_matricula($_SESSION["cpf"]);
   }
   if (!isset($_SESSION["cpf"])) 
   {
       $_SESSION["cpf"] = "";
   }
   if (isset($_POST["email"])) 
   {
       $_SESSION["email"] = $_POST["email"];
       nm_limpa_str_consulta_matricula($_SESSION["email"]);
   }
   if (isset($_GET["email"])) 
   {
       $_SESSION["email"] = $_GET["email"];
       nm_limpa_str_consulta_matricula($_SESSION["email"]);
   }
   if (!isset($_SESSION["email"])) 
   {
       $_SESSION["email"] = "";
   }
   if (isset($_POST["matricula"])) 
   {
       $_SESSION["matricula"] = $_POST["matricula"];
       nm_limpa_str_consulta_matricula($_SESSION["matricula"]);
   }
   if (isset($_GET["matricula"])) 
   {
       $_SESSION["matricula"] = $_GET["matricula"];
       nm_limpa_str_consulta_matricula($_SESSION["matricula"]);
   }
   if (!isset($_SESSION["matricula"])) 
   {
       $_SESSION["matricula"] = "";
   }
   if (isset($_POST["curso"])) 
   {
       $_SESSION["curso"] = $_POST["curso"];
       nm_limpa_str_consulta_matricula($_SESSION["curso"]);
   }
   if (isset($_GET["curso"])) 
   {
       $_SESSION["curso"] = $_GET["curso"];
       nm_limpa_str_consulta_matricula($_SESSION["curso"]);
   }
   if (!isset($_SESSION["curso"])) 
   {
       $_SESSION["curso"] = "";
   }
   if (isset($_POST["turno"])) 
   {
       $_SESSION["turno"] = $_POST["turno"];
       nm_limpa_str_consulta_matricula($_SESSION["turno"]);
   }
   if (isset($_GET["turno"])) 
   {
       $_SESSION["turno"] = $_GET["turno"];
       nm_limpa_str_consulta_matricula($_SESSION["turno"]);
   }
   if (!isset($_SESSION["turno"])) 
   {
       $_SESSION["turno"] = "";
   }
   if (isset($_POST["celular"])) 
   {
       $_SESSION["celular"] = $_POST["celular"];
       nm_limpa_str_consulta_matricula($_SESSION["celular"]);
   }
   if (isset($_GET["celular"])) 
   {
       $_SESSION["celular"] = $_GET["celular"];
       nm_limpa_str_consulta_matricula($_SESSION["celular"]);
   }
   if (!isset($_SESSION["celular"])) 
   {
       $_SESSION["celular"] = "";
   }
   if (isset($_POST["id_aluno"])) 
   {
       $_SESSION["id_aluno"] = $_POST["id_aluno"];
       nm_limpa_str_consulta_matricula($_SESSION["id_aluno"]);
   }
   if (isset($_GET["id_aluno"])) 
   {
       $_SESSION["id_aluno"] = $_GET["id_aluno"];
       nm_limpa_str_consulta_matricula($_SESSION["id_aluno"]);
   }
   if (!isset($_SESSION["id_aluno"])) 
   {
       $_SESSION["id_aluno"] = "";
   }
   if (isset($_POST["situacao_aluno"])) 
   {
       $_SESSION["situacao_aluno"] = $_POST["situacao_aluno"];
       nm_limpa_str_consulta_matricula($_SESSION["situacao_aluno"]);
   }
   if (isset($_GET["situacao_aluno"])) 
   {
       $_SESSION["situacao_aluno"] = $_GET["situacao_aluno"];
       nm_limpa_str_consulta_matricula($_SESSION["situacao_aluno"]);
   }
   if (!isset($_SESSION["situacao_aluno"])) 
   {
       $_SESSION["situacao_aluno"] = "";
   }
   if (!empty($glo_perfil))  
   { 
      $_SESSION['scriptcase']['glo_perfil'] = $glo_perfil;
   }   
   if (isset($glo_servidor)) 
   {
       $_SESSION['scriptcase']['glo_servidor'] = $glo_servidor;
   }
   if (isset($glo_banco)) 
   {
       $_SESSION['scriptcase']['glo_banco'] = $glo_banco;
   }
   if (isset($glo_tpbanco)) 
   {
       $_SESSION['scriptcase']['glo_tpbanco'] = $glo_tpbanco;
   }
   if (isset($glo_usuario)) 
   {
       $_SESSION['scriptcase']['glo_usuario'] = $glo_usuario;
   }
   if (isset($glo_senha)) 
   {
       $_SESSION['scriptcase']['glo_senha'] = $glo_senha;
   }
   if (isset($glo_senha_protect)) 
   {
       $_SESSION['scriptcase']['glo_senha_protect'] = $glo_senha_protect;
   }
   if (isset($nmgp_outra_jan) && $nmgp_outra_jan == 'true')
   {
       $script_case_init = "";
   }
   if (!isset($script_case_init) || empty($script_case_init))
   {
       $script_case_init = rand(2, 10000);
   }
   $salva_iframe = false;
   if (isset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu']))
   {
       $salva_iframe = $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'];
       unset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu']);
   }
   if (isset($nm_run_menu) && $nm_run_menu == 1)
   {
        if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && isset($_SESSION['scriptcase']['sc_apl_menu_atual']))
        {
            foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
            {
                if ($aba == $_SESSION['scriptcase']['sc_apl_menu_atual'])
                {
                    unset($_SESSION['scriptcase']['sc_aba_iframe'][$aba]);
                    break;
                }
            }
        }
        $_SESSION['scriptcase']['sc_apl_menu_atual'] = "consulta_matricula";
        $achou = false;
        if (isset($_SESSION['sc_session'][$script_case_init]))
        {
            foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
            {
                if ($nome_apl == 'consulta_matricula' || $achou)
                {
                    unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                    if (!empty($_SESSION['sc_session'][$script_case_init][$nome_apl]))
                    {
                        $achou = true;
                    }
                }
            }
            if (!$achou && isset($nm_apl_menu))
            {
                foreach ($_SESSION['sc_session'][$script_case_init] as $nome_apl => $resto)
                {
                    if ($nome_apl == $nm_apl_menu || $achou)
                    {
                        $achou = true;
                        if ($nome_apl != $nm_apl_menu)
                        {
                            unset($_SESSION['sc_session'][$script_case_init][$nome_apl]);
                        }
                    }
                }
            }
        }
        $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'] = true;
   }
   else
   {
       $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['iframe_menu'] = $salva_iframe;
   }

   if (!isset($_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize']))
   {
       $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize'] = true;
   }
   elseif (!isset($_SERVER['HTTP_REFERER']))
   {
       $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize'] = false;
   }
   elseif (false === strpos($_SERVER['HTTP_REFERER'], '.php'))
   {
       $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize'] = true;
   }
   else
   {
       $sReferer = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], '.php'));
       $sReferer = substr($sReferer, strrpos($sReferer, '/') + 1);
       if ('consulta_matricula' == $sReferer || 'consulta_matricula_' == substr($sReferer, 0, 19))
       {
           $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize'] = false;
       }
       else
       {
           $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['initialize'] = true;
       }
   }

   $_POST['script_case_init'] = $script_case_init;
   if (isset($_SESSION['scriptcase']['sc_outra_jan']) && $_SESSION['scriptcase']['sc_outra_jan'] == 'consulta_matricula')
   {
       $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['sc_outra_jan'] = true;
        unset($_SESSION['scriptcase']['sc_outra_jan']);
   }
   $_SESSION['sc_session'][$script_case_init]['consulta_matricula']['menu_desenv'] = false;   
   if (!defined("SC_ERROR_HANDLER"))
   {
       define("SC_ERROR_HANDLER", 1);
       include_once(dirname(__FILE__) . "/consulta_matricula_erro.php");
   }
   if (!empty($nmgp_parms)) 
   { 
       $nmgp_parms = str_replace("@aspass@", "'", $nmgp_parms);
       $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
       $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
       $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
       $todo  = explode("?@?", $todox);
       $ix = 0;
       while (!empty($todo[$ix]))
       {
            $cadapar = explode("?#?", $todo[$ix]);
            if (1 < sizeof($cadapar))
            {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                nm_limpa_str_consulta_matricula($cadapar[1]);
                if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                $$cadapar[0] = $cadapar[1];
            }
            $ix++;
       }
       if (isset($global_consulta)) 
       {
           $_SESSION['global_consulta'] = $global_consulta;
           nm_limpa_str_consulta_matricula($_SESSION["global_consulta"]);
       }
       if (isset($nome)) 
       {
           $_SESSION['nome'] = $nome;
           nm_limpa_str_consulta_matricula($_SESSION["nome"]);
       }
       if (isset($cpf)) 
       {
           $_SESSION['cpf'] = $cpf;
           nm_limpa_str_consulta_matricula($_SESSION["cpf"]);
       }
       if (isset($email)) 
       {
           $_SESSION['email'] = $email;
           nm_limpa_str_consulta_matricula($_SESSION["email"]);
       }
       if (isset($matricula)) 
       {
           $_SESSION['matricula'] = $matricula;
           nm_limpa_str_consulta_matricula($_SESSION["matricula"]);
       }
       if (isset($curso)) 
       {
           $_SESSION['curso'] = $curso;
           nm_limpa_str_consulta_matricula($_SESSION["curso"]);
       }
       if (isset($turno)) 
       {
           $_SESSION['turno'] = $turno;
           nm_limpa_str_consulta_matricula($_SESSION["turno"]);
       }
       if (isset($celular)) 
       {
           $_SESSION['celular'] = $celular;
           nm_limpa_str_consulta_matricula($_SESSION["celular"]);
       }
       if (isset($id_aluno)) 
       {
           $_SESSION['id_aluno'] = $id_aluno;
           nm_limpa_str_consulta_matricula($_SESSION["id_aluno"]);
       }
       if (isset($situacao_aluno)) 
       {
           $_SESSION['situacao_aluno'] = $situacao_aluno;
           nm_limpa_str_consulta_matricula($_SESSION["situacao_aluno"]);
       }
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0;  
   $contr_consulta_matricula = new consulta_matricula_apl();
   $contr_consulta_matricula->controle();
//
   function nm_limpa_str_consulta_matricula(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               foreach ($str as $x => $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
?>
