<?php
$manifest = array(
	  'name' => 'Account, Contact, Lead Targetlists subpanel',
	  'description' => 'Adds target lists subpanel to account, contact, lead module',
		'acceptable_sugar_versions' => array (),
		'acceptable_sugar_flavors' => array('CE'),
		'author' => 'Andreas Fleischmann',
		'published_date' => '2018-11-26',
		'version' => '1.0.0',
		'readme' => 'README.txt',
		'is_uninstallable' => 'Yes',
		'type' => 'module'
		);

		$installdefs = array(
				'id'=> 'prianto_targetlists_subpanel',
				'language' => array (
					// Accounts
					array (
						'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Language/en_us.account_targetlists_subpanel.php',
						'to_module' => 'Accounts',
						'language' => 'en_us',
					      ),
					array (
						'from' => '<basepath>/custom/Extension/modules/Accounts/Ext/Language/de_de.account_targetlists_subpanel.php',
						'to_module' => 'Accounts',
						'language' => 'de_DE',
					      ),

          // Contacts
					array (
						'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/en_us.contact_targetlists_subpanel.php',
						'to_module' => 'Contacts',
						'language' => 'en_us',
					      ),
					array (
						'from' => '<basepath>/custom/Extension/modules/Contacts/Ext/Language/de_de.contact_targetlists_subpanel.php',
						'to_module' => 'Contacts',
						'language' => 'de_DE',
					      ),

          // Leads
					array (
						'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/en_us.lead_targetlists_subpanel.php',
						'to_module' => 'Leads',
						'language' => 'en_us',
					      ),
					array (
						'from' => '<basepath>/custom/Extension/modules/Leads/Ext/Language/de_de.lead_targetlists_subpanel.php',
						'to_module' => 'Leads',
						'language' => 'de_DE',
					      ),
					),
				'layoutdefs' => array(
					  // Accounts
						array(
							'from'=> '<basepath>/custom/Extension/modules/Accounts/Ext/Layoutdefs/account_targetlists_subpanel.php',
							'to_module'=> 'Accounts'
							),
						// Contacts
						array(
							'from'=> '<basepath>/custom/Extension/modules/Contacts/Ext/Layoutdefs/contact_targetlists_subpanel.php',
							'to_module'=> 'Contacts'
							),
						// Leads
						array(
							'from'=> '<basepath>/custom/Extension/modules/Leads/Ext/Layoutdefs/lead_targetlists_subpanel.php',
							'to_module'=> 'Leads'
							),

						),
				);
