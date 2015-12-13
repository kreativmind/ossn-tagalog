<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    KREATIVMIND <info@kreativmind.co>
 * @copyright 2015 KREATIVMIND
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$tl = array(
    'groups' => 'Grupos',
    'add:group' => 'Idagdag grupo',
    'requests' => 'Mga Kahilingan',

    'members' => 'Miyembro',
    'member:add:error' => 'May nangyaring mali! Mangyaring subukan muli sa ibang pagkakataon.',
    'member:added' => 'Inaprubahan hiling pagsapi!',

    'member:request:deleted' => 'Tinanggihan kahilingan pagsapi!',
    'member:request:delete:fail' => 'Hindi tanggihan kahilingan kasapi! Mangyaring subukan muli sa ibang pagkakataon.',
    'membership:cancel:succes' => 'Kinansela ang kahilingan kasapi!',
    'membership:cancel:fail' => 'Hindi makansela ang kahilingan kasapi! Mangyaring subukan muli sa ibang pagkakataon.',

    'group:added' => 'Matagumpay na nalikha ang grupo!',
    'group:add:fail' => 'Hindi makabuo ng grupo! Mangyaring subukan muli sa ibang pagkakataon.',

    'memebership:sent' => 'Matagumpay na naipadala Kahilingan!',
    'memebership:sent:fail' => 'Hindi maaaring magpadala ng kahilingan! Mangyaring subukan muli sa ibang pagkakataon.',

    'group:updated' => 'Na-update Group!',
    'group:update:fail' => 'Hindi ma-update group! Mangyaring subukan muli sa ibang pagkakataon.',

    'group:name' => 'Pangalan ng grupo',
    'group:desc' => 'Grupo deskripsyon',
    'privacy:group:public' => 'Ang lahat ay maaaring makita ang pangkat na ito at mga post nito. Mga miyembro lamang ang maaaring mag-post sa grupong ito.',
    'privacy:group:close' => 'Ang lahat ay maaaring makita ang mga pangkat na ito. Mga miyembro lamang ang maaaring mag-post at makita mga post.',

    'group:memb:remove' => 'Alisin',
    'leave:group' => 'Umalis grupo',
    'join:group' => 'Sumali sa grupo',
    'total:members' => 'Kabuuang Mga Miyembro',
    'group:members' => "Miyembro (%s)",
    'view:all' => 'Tignan lahat',
    'member:requests' => 'KAHILINGAN (%s)',
    'about:group' => 'Tungkol sa grupo',
    'cancel:membership' => 'Kanselahin kasapi',

    'no:requests' => 'Walang Kahilingan',
    'approve' => 'Aprobahan',
    'decline' => 'Tanggihan',
    'search:groups' => 'Paghahanap grupo',

    'close:group:notice' => 'Sumali sa grupong ito upang makita ang mga post, larawan, at mga komento.',
    'closed:group' => 'Saradong grupo',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Post sa pangkat na',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s ay humiling na sumali %s',
	'ossn:group:by' => 'Ng:',
	
	'group:deleted' => 'Ang grupo na ito ay tinanggal na',
	'group:delete:fail' => 'Ang grupo ay hindi matatanggal',	
);
ossn_register_languages('tl', $tl); 
