<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2009-09-15 18:31

$extensionPath = t3lib_extMgm::extPath('solr');
return array(

		// SolrPhpClient

	'apache_solr_service_balancer' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Service/Balancer.php',
	'apache_solr_document' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Document.php',
	'apache_solr_exception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Exception.php',
	'apache_solr_httptransportexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/HttpTransportException.php',
	'apache_solr_invalidargumentexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/InvalidArgumentException.php',
	'apache_solr_noserviceavailableexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/NoServiceAvailableException.php',
	'apache_solr_parserexception' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/ParserException.php',
	'apache_solr_response' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Response.php',
	'apache_solr_service' => $extensionPath . 'lib/SolrPhpClient/Apache/Solr/Service.php',

		// EXT:solr

	'tx_solr_additionalfieldsindexer' => $extensionPath . 'classes/class.tx_solr_additionalfieldsindexer.php',
	'tx_solr_commandresolver' => $extensionPath . 'classes/class.tx_solr_commandresolver.php',
	'tx_solr_connectionmanager' => $extensionPath . 'classes/class.tx_solr_connectionmanager.php',
	'tx_solr_garbagecollector' => $extensionPath . 'classes/class.tx_solr_garbagecollector.php',
	'tx_solr_indexer' => $extensionPath . 'classes/class.tx_solr_indexer.php',
	'tx_solr_indexerselector' => $extensionPath . 'classes/class.tx_solr_indexerselector.php',
	'tx_solr_languagefileunavailableexception' => $extensionPath . 'classes/class.tx_solr_languagefileunavailableexception.php',
	'tx_solr_nosolrconnectionfoundexception' => $extensionPath . 'classes/class.tx_solr_nosolrconnectionfoundexception.php',
	'tx_solr_query' => $extensionPath . 'classes/class.tx_solr_query.php',
	'tx_solr_search' => $extensionPath . 'classes/class.tx_solr_search.php',
	'tx_solr_site' => $extensionPath . 'classes/class.tx_solr_site.php',
	'tx_solr_solrservice' => $extensionPath . 'classes/class.tx_solr_solrservice.php',
	'tx_solr_suggestquery' => $extensionPath . 'classes/class.tx_solr_suggestquery.php',
	'tx_solr_template' => $extensionPath . 'classes/class.tx_solr_template.php',
	'tx_solr_typo3environment' => $extensionPath . 'classes/class.tx_solr_typo3environment.php',
	'tx_solr_typo3pagecontentextractor' => $extensionPath . 'classes/class.tx_solr_typo3pagecontentextractor.php',
	'tx_solr_typo3pageindexer' => $extensionPath . 'classes/class.tx_solr_typo3pageindexer.php',
	'tx_solr_util' => $extensionPath . 'classes/class.tx_solr_util.php',

	'tx_solr_access_rootline' => $extensionPath . 'classes/access/class.tx_solr_access_rootline.php',
	'tx_solr_access_rootlineelement' => $extensionPath . 'classes/access/class.tx_solr_access_rootlineelement.php',
	'tx_solr_access_rootlineelementformatexception' => $extensionPath . 'classes/access/class.tx_solr_access_rootlineelementformatexception.php',

	'tx_solr_facet_facetrenderer' => $extensionPath . 'classes/facet/class.tx_solr_facet_facetrenderer.php',
	'tx_solr_facet_simplefacetrenderer' => $extensionPath . 'classes/facet/class.tx_solr_facet_simplefacetrenderer.php',
	'tx_solr_facet_usedfacetrenderer' => $extensionPath . 'classes/facet/class.tx_solr_facet_usedfacetrenderer.php',

	'tx_solr_fieldprocessor_service' => $extensionPath . 'classes/fieldprocessor/class.tx_solr_fieldprocessor_service.php',
	'tx_solr_fieldprocessor_timestamptoisodate' => $extensionPath . 'classes/fieldprocessor/class.tx_solr_fieldprocessor_timestamptoisodate.php',

	'tx_solr_pluginbase_commandpluginbase' => $extensionPath . 'classes/pluginbase/class.tx_solr_pluginbase_commandpluginbase.php',
	'tx_solr_pluginbase_pluginbase' => $extensionPath . 'classes/pluginbase/class.tx_solr_pluginbase_pluginbase.php',

	'tx_solr_query_modifier_faceting' => $extensionPath . 'classes/query/modifier/class.tx_solr_query_modifier_faceting.php',

	'tx_solr_viewhelper_abstractsubpartviewhelper' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_abstractsubpartviewhelper.php',
	'tx_solr_viewhelper_crop' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_crop.php',
	'tx_solr_viewhelper_currentresultnumber' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_currentresultnumber.php',
	'tx_solr_viewhelper_date' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_date.php',
	'tx_solr_viewhelper_facet' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_facet.php',
	'tx_solr_viewhelper_link' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_link.php',
	'tx_solr_viewhelper_lll' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_lll.php',
	'tx_solr_viewhelper_oddeven' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_oddeven.php',
	'tx_solr_viewhelper_relevance' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_relevance.php',
	'tx_solr_viewhelper_relevancebar' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_relevancebar.php',
	'tx_solr_viewhelper_solrlink' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_solrlink.php',
	'tx_solr_viewhelper_sortindicator' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_sortindicator.php',
	'tx_solr_viewhelper_sorturl' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_sorturl.php',
	'tx_solr_viewhelper_ts' => $extensionPath . 'classes/viewhelper/class.tx_solr_viewhelper_ts.php',

		// modules

	'tx_solr_moduleadmin' => $extensionPath . 'mod_admin/index.php',

		// plugins

	'tx_solr_pi_results' => $extensionPath . 'pi_results/class.tx_solr_pi_results.php',
	'tx_solr_pi_search' => $extensionPath . 'pi_search/class.tx_solr_pi_search.php',

	'tx_solr_pi_results_advancedformcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_advancedformcommand.php',
	'tx_solr_pi_results_errorscommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_errorscommand.php',
	'tx_solr_pi_results_facetingcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_facetingcommand.php',
	'tx_solr_pi_results_formcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_formcommand.php',
	'tx_solr_pi_results_noresultscommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_noresultscommand.php',
	'tx_solr_pi_results_resultscommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_resultscommand.php',
	'tx_solr_pi_results_sortingcommand' => $extensionPath . 'pi_results/class.tx_solr_pi_results_sortingcommand.php',

	'tx_solr_pi_results_spellcheckformmodifier' => $extensionPath . 'pi_results/class.tx_solr_pi_results_spellcheckformmodifier.php',

		// scheduler tasks

	'tx_solr_scheduler_optimizetask' => $extensionPath . 'scheduler/class.tx_solr_scheduler_optimizetask.php',
	'tx_solr_scheduler_optimizetasksolrserverfield' => $extensionPath . 'scheduler/class.tx_solr_scheduler_optimizetasksolrserverfield.php',
	'tx_solr_scheduler_committask' => $extensionPath . 'scheduler/class.tx_solr_scheduler_committask.php',
	'tx_solr_scheduler_committasksolrserverfield' => $extensionPath . 'scheduler/class.tx_solr_scheduler_committasksolrserverfield.php',

		// reports

	'tx_solr_report_accessfilterplugininstalledstatus' => $extensionPath . 'report/class.tx_solr_report_accessfilterplugininstalledstatus.php',
	'tx_solr_report_indexreport' => $extensionPath . 'report/class.tx_solr_report_indexreport.php',
	'tx_solr_report_schemastatus' => $extensionPath . 'report/class.tx_solr_report_schemastatus.php',
	'tx_solr_report_solrconfigstatus' => $extensionPath . 'report/class.tx_solr_report_solrconfigstatus.php',
	'tx_solr_report_solrconfigurationstatus' => $extensionPath . 'report/class.tx_solr_report_solrconfigurationstatus.php',
	'tx_solr_report_solrstatus' => $extensionPath . 'report/class.tx_solr_report_solrstatus.php',

		// interfaces

	'tx_solr_additionalindexer' => $extensionPath . 'interfaces/interface.tx_solr_additionalindexer.php',
	'tx_solr_facetrenderer' => $extensionPath . 'interfaces/interface.tx_solr_facetrenderer.php',
	'tx_solr_facetsmodifier' =>  $extensionPath . 'interfaces/interface.tx_solr_facetsmodifier.php',
	'tx_solr_fieldprocessor' => $extensionPath . 'interfaces/interface.tx_solr_fieldprocessor.php',
	'tx_solr_formmodifier' => $extensionPath . 'interfaces/interface.tx_solr_formmodifier.php',
	'tx_solr_plugincommand' => $extensionPath . 'interfaces/interface.tx_solr_plugincommand.php',
	'tx_solr_queryfilterparser' => $extensionPath . 'interfaces/interface.tx_solr_queryfilterparser.php',
	'tx_solr_querymodifier' => $extensionPath . 'interfaces/interface.tx_solr_querymodifier.php',
	'tx_solr_responseprocessor' => $extensionPath . 'interfaces/interface.tx_solr_responseprocessor.php',
	'tx_solr_resultdocumentmodifier' => $extensionPath . 'interfaces/interface.tx_solr_resultdocumentmodifier.php',
	'tx_solr_resultsetmodifier' => $extensionPath . 'interfaces/interface.tx_solr_resultsetmodifier.php',
	'tx_solr_subpartviewhelper' => $extensionPath . 'interfaces/interface.tx_solr_subpartviewhelper.php',
	'tx_solr_substitutepageindexer' => $extensionPath . 'interfaces/interface.tx_solr_substitutepageindexer.php',
	'tx_solr_templatemodifier' => $extensionPath . 'interfaces/interface.tx_solr_templatemodifier.php',
	'tx_solr_viewhelper' => $extensionPath . 'interfaces/interface.tx_solr_viewhelper.php',
	'tx_solr_viewhelperprovider' => $extensionPath . 'interfaces/interface.tx_solr_viewhelperprovider.php',
);
?>