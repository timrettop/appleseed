<?

  chdir ($_SERVER['DOCUMENT_ROOT']);

  // Include BASE API classes.
  require_once ('code/include/classes/BASE/application.php');
  require_once ('code/include/classes/BASE/debug.php');
  require_once ('code/include/classes/base.php');
  require_once ('code/include/classes/system.php');
  require_once ('code/include/classes/BASE/remote.php');
  require_once ('code/include/classes/BASE/tags.php'); 
  require_once ('code/include/classes/BASE/xml.php');

  // Include Appleseed classes.
  require_once ('code/include/classes/appleseed.php');
  require_once ('code/include/classes/friends.php');
  require_once ('code/include/classes/groups.php');
  require_once ('code/include/classes/messages.php');
  require_once ('code/include/classes/privacy.php');
  require_once ('code/include/classes/users.php');
  require_once ('code/include/classes/auth.php');
  require_once ('code/include/classes/search.php'); 
  
  $zAPPLE = new cAPPLESEED();
  $zAPPLE->Initialize();

  $authSessions =new cDATACLASS();
  $authSessions->TableName = "authSessions";
  $authTokens =new cDATACLASS();
  $authTokens->TableName = "authTokens";
  $authVerification =new cDATACLASS();
  $authVerification->TableName = "authVerification";
  $commentInformation =new cDATACLASS();
  $commentInformation->TableName = "commentInformation";
  $contentArticles =new cDATACLASS();
  $contentArticles->TableName = "contentArticles";
  $contentPages =new cDATACLASS();
  $contentPages->TableName = "contentPages";
  $friendCircles =new cDATACLASS();
  $friendCircles->TableName = "friendCircles";
  $friendCirclesList =new cDATACLASS();
  $friendCirclesList->TableName = "friendCirclesList";
  $friendInformation =new cDATACLASS();
  $friendInformation->TableName = "friendInformation";
  $groupContent =new cDATACLASS();
  $groupContent->TableName = "groupContent";
  $groupInformation =new cDATACLASS();
  $groupInformation->TableName = "groupInformation";
  $groupMembers =new cDATACLASS();
  $groupMembers->TableName = "groupMembers";
  $journalPost =new cDATACLASS();
  $journalPost->TableName = "journalPost";
  $journalPrivacy =new cDATACLASS();
  $journalPrivacy->TableName = "journalPrivacy";
  $messageAttachments =new cDATACLASS();
  $messageAttachments->TableName = "messageAttachments";
  $messageInformation =new cDATACLASS();
  $messageInformation->TableName = "messageInformation";
  $messageLabelList =new cDATACLASS();
  $messageLabelList->TableName = "messageLabelList";
  $messageLabels =new cDATACLASS();
  $messageLabels->TableName = "messageLabels";
  $messageNotification =new cDATACLASS();
  $messageNotification->TableName = "messageNotification";
  $messageRecipient =new cDATACLASS();
  $messageRecipient->TableName = "messageRecipient";
  $messageStore =new cDATACLASS();
  $messageStore->TableName = "messageStore";
  $photoInformation =new cDATACLASS();
  $photoInformation->TableName = "photoInformation";
  $photoPrivacy =new cDATACLASS();
  $photoPrivacy->TableName = "photoPrivacy";
  $photoSets =new cDATACLASS();
  $photoSets->TableName = "photoSets";
  $systemConfig =new cDATACLASS();
  $systemConfig->TableName = "systemConfig";
  $systemDefaults =new cDATACLASS();
  $systemDefaults->TableName = "systemDefaults";
  $systemLogs =new cDATACLASS();
  $systemLogs->TableName = "systemLogs";
  $systemOptions =new cDATACLASS();
  $systemOptions->TableName = "systemOptions";
  $systemStrings =new cDATACLASS();
  $systemStrings->TableName = "systemStrings";
  $systemTooltips =new cDATACLASS();
  $systemTooltips->TableName = "systemTooltips";
  $userAccess =new cDATACLASS();
  $userAccess->TableName = "userAccess";
  $userAnswers =new cDATACLASS();
  $userAnswers->TableName = "userAnswers";
  $userAuthorization =new cDATACLASS();
  $userAuthorization->TableName = "userAuthorization";
  $userBlocks =new cDATACLASS();
  $userBlocks->TableName = "userBlocks";
  $userGroups =new cDATACLASS();
  $userGroups->TableName = "userGroups";
  $userIcons =new cDATACLASS();
  $userIcons->TableName = "userIcons";
  $userInformation =new cDATACLASS();
  $userInformation->TableName = "userInformation";
  $userInvites =new cDATACLASS();
  $userInvites->TableName = "userInvites";
  $userPreferences =new cDATACLASS();
  $userPreferences->TableName = "userPreferences";
  $userPrivacy =new cDATACLASS();
  $userPrivacy->TableName = "userPrivacy";
  $userProfile =new cDATACLASS();
  $userProfile->TableName = "userProfile";
  $userQuestions =new cDATACLASS();
  $userQuestions->TableName = "userQuestions";
  $userSessions =new cDATACLASS();
  $userSessions->TableName = "userSessions";
  $userSettings =new cDATACLASS();
  $userSettings->TableName = "userSettings";
  $userTokens =new cDATACLASS();
  $userTokens->TableName = "userTokens";

  $authSessions->Fields();
  $authTokens->Fields();
  $authVerification->Fields();
  $commentInformation->Fields();
  $contentArticles->Fields();
  $contentPages->Fields();
  $friendCircles->Fields();
  $friendCirclesList->Fields();
  $friendInformation->Fields();
  $groupContent->Fields();
  $groupInformation->Fields();
  $groupMembers->Fields();
  $journalPost->Fields();
  $journalPrivacy->Fields();
  $messageAttachments->Fields();
  $messageInformation->Fields();
  $messageLabelList->Fields();
  $messageLabels->Fields();
  $messageNotification->Fields();
  $messageRecipient->Fields();
  $messageStore->Fields();
  $photoInformation->Fields();
  $photoPrivacy->Fields();
  $photoSets->Fields();
  $systemConfig->Fields();
  $systemDefaults->Fields();
  $systemLogs->Fields();
  $systemOptions->Fields();
  $systemStrings->Fields();
  $systemTooltips->Fields();
  $userAccess->Fields();
  $userAnswers->Fields();
  $userAuthorization->Fields();
  $userBlocks->Fields();
  $userGroups->Fields();
  $userIcons->Fields();
  $userInformation->Fields();
  $userInvites->Fields();
  $userPreferences->Fields();
  $userPrivacy->Fields();
  $userProfile->Fields();
  $userQuestions->Fields();
  $userSessions->Fields();
  $userSettings->Fields();
  $userTokens->Fields();

  global $zCACHE;
  echo "<hr />Column Cache <hr />\n\n";
  echo '&lt;?php global $zCACHE; $zCACHE->ColumnCache = ';
  var_export ($zCACHE->ColumnCache);
  echo '?&gt;';

  echo "<hr />Field Cache <hr />\n\n";
  echo '&lt;?php global $zCACHE; $zCACHE->FieldCache = ';
  var_export ($zCACHE->FieldCache);
  echo '?&gt;';

  exit;
?>
