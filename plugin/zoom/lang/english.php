<?php
/* License: see /license.txt */

// Needed in order to show the plugin title
$strings['plugin_title'] = "Zoom Videoconference";
$strings['plugin_comment'] = "Zoom Videoconference integration in courses and sessions";

$strings['tool_enable'] = 'Zoom videoconference tool enabled';
$strings['apiKey'] = 'API Key';
$strings['apiSecret'] = 'API Secret';
$strings['enableParticipantRegistration'] = 'Enable participant registration';
$strings['enableCloudRecording'] = 'Enable cloud recording';
$strings['enableGlobalConference'] = 'Enable global conference';
$strings['enableGlobalConferencePerUser'] = 'Enable global conference per user';
$strings['globalConferenceAllowRoles'] = "Global conference link only visible for these user roles";

$strings['tool_enable_help'] = "Choose whether you want to enable the Zoom videoconference tool.
Once enabled, it will show as an additional course tool in all courses' homepage :
teachers will be able to <strong>launch</strong> a conference and student to <strong>join</strong> it.
<br/>
This plugin requires a Zoom account to manage meetings.
The Zoom API uses JSON Web Tokens (JWT) to authenticate account-level access.
<br/>
JWT apps provide an <strong>API <em>Key</em> and <em>Secret</em></strong> required to authenticate with JWT.

To get them, create a <em>JWT App</em> :
<br/>1. log into <a href=\"https://zoom.us/profile\">your Zoom profile page</a>
<br/>2. click on <em>Advanced / Application Marketplace</em>
<br/>3. click on <em><a href=\"https://marketplace.zoom.us/develop/create\">Develop / build App</a></em>
<br/>4. choose <em>JWT / Create</em>
<br/>5. fill in information about your \"App\"
(application and company names, contact name and email address)
<br/>6. click on <em>Continue</em>
Locate your API Key and Secret in the App Credentials page.
<br/>
<strong>Attention</strong>:
<br/>Zoom is <em>NOT</em> free software and specific rules apply to personal data protection.
Please check with Zoom and make sure they satisfy you and learning users.";

$strings['enableParticipantRegistration_help'] = "Requires a paying Zoom profile.
Will not work for a <em>basic</em> profile.";

$strings['enableCloudRecording_help'] = "Requires a paying Zoom profile.
Will not work for a <em>basic</em> profile.";

// please keep these lines alphabetically sorted
$strings['AllCourseUsersWereRegistered'] = "All course students were registered";
$strings['Agenda'] = "Agenda";
$strings['CopyingJoinURL'] = "Copying join URL";
$strings['CopyJoinAsURL'] = "Copy 'join as' URL";
$strings['CopyToCourse'] = "Copy to course";
$strings['CouldNotCopyJoinURL'] = "Could not copy join URL";
$strings['Course'] = "Cours";
$strings['CreatedAt'] = "Created at";
$strings['CreateLinkInCourse'] = "Create link(s) in course";
$strings['DeleteMeeting'] = "Delete meeting";
$strings['DeleteFile'] = "Delete file(s)";
$strings['Details'] = "Details";
$strings['DoIt'] = "Do it";
$strings['Duration'] = "Duration";
$strings['DurationFormat'] = "%hh%I";
$strings['DurationInMinutes'] = "Duration (in minutes)";
$strings['EndDate'] = "End Date";
$strings['Files'] = "Files";
$strings['Finished'] = "finished";
$strings['FileWasCopiedToCourse'] = "The file was copied to the course";
$strings['FileWasDeleted'] = "The file was deleted";
$strings['InstantMeeting'] = "Instant meeting";
$strings['Join'] = "Join";
$strings['JoinMeetingAsMyself'] = "Join meeting as myself";
$strings['JoinURLCopied'] = "Join URL copied";
$strings['JoinURLToSendToParticipants'] = "Join URL to send to participants";
$strings['LiveMeetings'] = "Live meetings";
$strings['LinkToFileWasCreatedInCourse'] = "A link to the file was added to the course";
$strings['MeetingDeleted'] = "Meeting deleted";
$strings['MeetingsFound'] = "Meetings found";
$strings['MeetingUpdated'] = "Meeting updated";
$strings['NewMeetingCreated'] = "New meeting created";
$strings['Password'] = "Password";
$strings['RecurringWithFixedTime'] = "Recurring with fixed time";
$strings['RecurringWithNoFixedTime'] = "Recurring with no fixed time";
$strings['RegisterAllCourseUsers'] = "Register all course users";
$strings['RegisteredUserListWasUpdated'] = "Registered user list updated";
$strings['RegisteredUsers'] = "Registered users";
$strings['RegisterNoUser'] = "Register no user";
$strings['RegisterTheseGroupMembers'] = "Register these group members";
$strings['ScheduleAMeeting'] = "Schedule a meeting";
$strings['ScheduledMeeting'] = "Scheduled meeting";
$strings['ScheduledMeetings'] = "Scheduled Meetings";
$strings['ScheduleTheMeeting'] = "Schedule the meeting";
$strings['Search'] = "Search";
$strings['Session'] = "Session";
$strings['StartDate'] = "Start Date";
$strings['Started'] = "started";
$strings['StartInstantMeeting'] = "Start instant meeting";
$strings['StartMeeting'] = "Start meeting";
$strings['StartTime'] = "Start time";
$strings['Topic'] = "Topic";
$strings['TopicAndAgenda'] = "Topic and agenda";
$strings['Type'] = "Type";
$strings['UpcomingMeetings'] = "Upcoming meetings";
$strings['UpdateMeeting'] = "Update meeting";
$strings['UpdateRegisteredUserList'] = "Update registered user list";
$strings['UserRegistration'] = "User registration";
$strings['Y-m-d H:i'] = "Y-m-d H:i";
$strings['Waiting'] = "waiting";
$strings['XRecordingOfMeetingXFromXDurationXDotX'] = "%s recording of meeting %s from %s (%s).%s";
$strings['ZoomVideoConferences'] = "Zoom Video Conferences";
