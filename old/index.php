<? 
include 'common/header.inc'; 
include 'phpEventCalendar/config.php';

mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

$today_m = date("n");
$today_y = date("Y");
$today_d = date("j");

$sql = 
	"SELECT d, m, y, title, text, start_time, end_time ".
	"FROM " . DB_TABLE_PREFIX . "mssgs ".
	"WHERE (y*10000+m*100+d) >= (YEAR(NOW())*10000+MONTH(NOW())*100+DAYOFMONTH(NOW())) ".
	"ORDER BY y, m, d, start_time";
$result = mysql_query($sql) or die(mysql_error());
?>


      <table>
      <tr>
        <td style="width:20%; vertical-align:top;" rowspan=4>
          <div id=imageset style="width:190px;">
            <div id=imagewrapper>
  	          <img src="images/dancing.gif" height=361 width=188>
            </div>
            <div id=imagecaption>
              A girl dances during the "Tour des Femmes"
            </div>
          </div>
          <div style="clear:both;"></div>
          <? if (mysql_numrows($result) > 0){ ?>
          <div id=upcomingevents>
            <span class=header>UPCOMING EVENTS</span><br>
            <a href="phpEventCalendar/" style="padding:0 10px; font-weight:bold; text-decoration:none; font-size:12px;">
              view calendar &raquo;</a><br>
            <?
            while( $row = mysql_fetch_array($result))
			{
				$d 			= $row["d"];
				$m 			= $row["m"];
				$y 			= $row["y"];
				$date 	 	= "$m.$d.$y";
				$title      = stripslashes($row["title"]);
				$text		= stripslashes(str_replace("\n", "<br />", $row["text"]));
				$start_time	= $row["start_time"];
				$end_time   = $row["end_time"];
	
				print "
				  <div class=event>
				    <span class=date>$date</span><br>";
				if ($start_time != "55:55:55"){
				  print "
				  	<span class=time>$start_time - $end_time</span><br>";
				}
				print "
				    <div class=title>
				      $title<br>
				      $text
				    </div>
				  </div>
				";
			}
            ?>
          </div>
          <? } ?>
        </td>
        <td style="vertical-align:top; width:80%;">

          <table class=contentbox cellspacing=0 cellpadding=0 border=0>
           <tr>
             <td class=spacer style="width:30px;"></td>
             <td class=spacer></td>
             <td class=spacer></td>
             <td class=spacer></td>
           </tr>
           <tr>
            <td colspan=2 width=168 height=21><img src="images/content_current_projects.gif"></td>
            <td class=content_top_border></td>
            <td class=content_tr_corner></td>
           </tr>
           <tr>
             <td class=content_left_border></td>
             <td colspan=2>
               <p class=content_text>
                 <b>International Women's Day Skits</b><br>
                 <a href="/documents/International_Womens_Day_Skit.doc">International Womens' Day Skit.doc</a><br />
                 <a href="/documents/IWD_english.doc">IWD english.doc</a><br />
                 <a href="/documents/International_Womens_Day_Francais.doc">International Womens Day Francais.doc</a><br />
                 <a href="/documents/Women_of_Africa_Coloring_Pages.doc">Women of Africa Coloring Pages.doc</a><br />
                 <a href="/documents/Theatre_pur_bes_bi_u_jigeen_ji.doc">Theatre pur bes bi u jigeen ji.doc</a>
               </p>
               <hr style="width:85%; background-color:#6296e4; height:1px; border:0px; ">
               <p class=content_text>
                 Start Date: October 5, 2007<br><br>
                 Peace Only Productions Presents...<br><br>
                 <b>&quot;Women in the Workplace&quot;</b> by Barry Pousman, PCV Senegal<br><br>
                 &quot;Women in the Workplace&quot; is a documentary focusing on several success stories of
                 women from all over Senegal.  Each of these women come from different backgrounds
                 and have taken different paths to get where they are today.  Some of them come from
                 small villages while others come from relatively more urban environments, some
                 from supportive families and others from less supportive families.  But each of
                 these women realized at some point in their lives that they could do more.
                 All too often, many women are pressured into lives that limit their potential,
                 negatively affecting both their individual selves and greater society.
                 This documentary looks at the histories of these women, the steps they have
                 taken in pursuit of their goals, the feelings they now have about their work,
                 and their hopes for the future.
               </p>
               <p class=content_text>
                 &quot;Women in the Workplace&quot; will be distributed to High Schools throughout
                 Senegal to facilitate discussions on the role of women in Senegalese society.
                 There will also be public screenings in Dakar at the French Cultural Institute and
                 copies will be given to various national NGO's for their outreach reference libraries.
                 The goal of this project is to continue the dialogue already in progress in Senegal
                 on women in the workplace.  And through SeneGAD (Senegal Gender and Development),
                 a secondary project for many Peace Corps Senegal Volunteers, this film will hopefully
                 be able to permeate local communities encouraging sustainable change in gender
                 perspectives for Senegalese society at large.  There are millions of women in Senegal;
                 lets help them reach their full potential.
               </p>
               <p class=content_text>
                 <b>Note from Kim Rusnak:</b><br>
				 Barry and Annie are here in Dakar working on a SeneGAD Video Project.  They will be
				 interviewing Senegalese women, and putting together a video - the idea behind it being
				 that we will have a video resource of interesting, career-minded women, who have come
				 from villages and done something interesting and unique with their lives.  This will
				 be translated, inchallah, into local languages and available for volunteers to use for
				 youth clubs, youth camps, etc.
			   </p>
			   <p class=content_text>
				 One of the ideas to go along with this was, to have some pictures, that are drawn by
				 youth throughout Senegal, about women.  They could potentially be used in the
				 introduction of the film, or the credits.  We would like the children is draw about
				 women, how they view women, what they think of when you say "women" or "gender".
				 They can be color or black & white.  They could be more from anything, paint, crayons,
				 charcoal, recycled products, etc.  Be Creative!!!
               </p>

             </td>
             <td class=content_right_border></td>
           </tr>
           <tr>
             <td class=content_bl_corner></td>
             <td colspan=2 class=content_bottom_border></td>
             <td class=content_br_corner></td>
           </tr>
           </table>

        </td>
      </tr>
      <tr>
        <td style="vertical-align:top;">

          <table class=contentbox cellspacing=0 cellpadding=0 border=0>
           <tr>
             <td class=spacer style="width:30px;"></td>
             <td class=spacer></td>
             <td class=spacer></td>
             <td class=spacer></td>
           </tr>
           <tr>
            <td colspan=2 width=152 height=21><img src="images/content_about.gif"></td>
            <td class=content_top_border></td>
            <td class=content_tr_corner></td>
           </tr>
           <tr>
             <td class=content_left_border></td>
             <td colspan=2>
               <p class=content_text>
                 SeneGAD began in the early 1980?s as a secondary project of Peace Corps
                 volunteers, under the name WID (Women in Development). The original mission
                 and philosophy have changed slightly. The current GAD approach focuses on the
                 social, economic, political and culturalforces that determine how men and
                 women participate in, benefit from and control project resources and activities
                 differently.
               </p>
               <p class=content_text>
                 Read our
                 <a href="documents/SeneGAD_Annual_Report_Final.doc" style="text-decoration:none;">
                 Annual Report Update</a> (.doc)
               </p>
             </td>
             <td class=content_right_border></td>
           </tr>
           <tr>
             <td class=content_bl_corner></td>
             <td colspan=2 class=content_bottom_border></td>
             <td class=content_br_corner></td>
           </tr>
           </table>

        </td>
      </tr>
      <tr>
        <td style="vertical-align:top; ">
          <table class=contentbox cellspacing=0 cellpadding=0 border=0>
           <tr>
             <td class=spacer style="width:30px;"></td>
             <td class=spacer></td>
             <td class=spacer></td>
             <td class=spacer></td>
           </tr>
           <tr>
            <td colspan=2 width=121 height=21><img src="images/content_our_mission.gif"></td>
            <td class=content_top_border></td>
            <td class=content_tr_corner></td>
           </tr>
           <tr>
             <td class=content_left_border></td>
             <td colspan=2>
               <p class=content_text>
                 To empower Senegalese women, men and youth to effectively integrate gender
                 equality into their daily lives, with the support of Peace Corps Volunteers.<br>
                 <br>
                 Our three main goals are to:
                 <ol class=mainlist>
                   <li>Educate and provide resources to volunteers on how to incorporate
                       gender and development into their work.<br><br></li>
                   <li>Implement programs that motivate, educate, and inspire Senegalese
                       women and girls to reach their full potential.<br><br></li>
                   <li>Encourage sustainable change in gender perspectives through collaboration
                       with local communities.<br><br></li>
                 </ol>
               </p>
             </td>
             <td class=content_right_border></td>
           </tr>
           <tr>
             <td class=content_bl_corner></td>
             <td colspan=2 class=content_bottom_border></td>
             <td class=content_br_corner></td>
           </tr>
           </table>
        </td>
      </tr>
      <tr>
        <td style="vertical-align:top; ">
          <table class=contentbox cellspacing=0 cellpadding=0 border=0>
           <tr>
             <td class=spacer style="width:30px;"></td>
             <td class=spacer></td>
             <td class=spacer></td>
             <td class=spacer></td>
           </tr>
           <tr>
            <td colspan=2 width=121 height=21><img src="images/content_statistics.gif"></td>
            <td class=content_top_border></td>
            <td class=content_tr_corner></td>
           </tr>
           <tr>
             <td class=content_left_border></td>
             <td colspan=2>
               <p class=content_text>
                 <ul class=mainlist>
                   <li>Adult literacy rate: men 51%, females 29%</li>
                   <li>Primary school enrollment ratio: male 78%, females 74%</li>
                   <li>Primary school attendance ratio: male 71%; females 67%</li>
                   <li>Secondary school enrollment ratio: male 22%, females 16%</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - UNICEF</p>
                 <ul class=mainlist>
                   <li>Enrollment rates for boys were 84.4% versus 80.6% for girls. However,
                       the dropout rate is higher for girls. The school dropout rate among
                       7-14 year olds is 7.2% for boys and 9.7% for girls</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - 2005, IMF</p>
                 <ul class=mainlist>
                   <li>Only 28.2% of the female population is literate, although for female
                       youth aged 15-24, it has increased to 41% </li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - 2005, World Bank Statistics</p>
                 <ul class=mainlist>
                   <li>Primary completion rates (for percentage of relevant age group) 49% for boys,
                       42% for girls</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - 2004, WB</p>
                 <ul class=mainlist>
                   <li>77% of Senegalese women are illiterate</li>
                   <li>55% of elementary school age girls are enrolled in school</li>
                   <li>23.8% of technical training school students are girl</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - 1995, IMF</p>
                 <ul class=mainlist>
                   <li>73.3% of adult women are illiterate (15+)</li>
                   <li>53.6% of adult men are illiterate (15+)</li>
                   <li>27% of women 15-24 are illiterate</li>
                   <li>18% of men 15-4 are illiterate</li>
                   <li>54% of elementary-age girls are enrolled in school</li>
                   <li>64% of elementary-age boys are enrolled in school</li>
                   <li>13% of secondary-age girls are enrolled in school</li>
                   <li>21% of secondary-age boys are enrolled in school</li>
                   <li>4: expected years of schooling for girls</li>
                   <li>6: expected years of schooling for boys</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10x; font-weight:bold;" class=mainlist>
                   - 1999, World Bank</p>
                 <ul class=mainlist>
                   <li>55% of school age girls attend school (national)</li>
                   <li>52.9% of school-age girls attend school (Kolda & Tambacounda)</li>
                 </ul>
                 <p style="text-align:right; padding:0px 10px; font-weight:bold;" class=mainlist>
                   - 2001, SCOFI</p>
               </p>
             </td>
             <td class=content_right_border></td>
           </tr>
           <tr>
             <td class=content_bl_corner></td>
             <td colspan=2 class=content_bottom_border></td>
             <td class=content_br_corner></td>
           </tr>
           </table>
        </td>
      </table>
      </td>
    </tr>
  </table>
<? include 'common/footer.inc'; ?>