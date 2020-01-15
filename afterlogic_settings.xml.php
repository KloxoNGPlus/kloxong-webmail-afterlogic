<?xml version="1.0" encoding="UTF-8"?>
<Settings xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	<Common>
		<!-- Default title that will be shown in browser's header (Default domain settings). -->
		<SiteName>AfterLogic WebMail Lite</SiteName>
		<!-- License key is supplied here. -->
		<LicenseKey/>
		<AdminLogin>mailadm</AdminLogin>
		<AdminPassword>afterlogic</AdminPassword>
		<DBType>MySQL</DBType>
		<DBPrefix/>
		<DBHost>localhost</DBHost>
		<DBName>afterlogic</DBName>
		<DBLogin>afterlogic</DBLogin>
		<DBPassword>afterlogic</DBPassword>
		<UseSlaveConnection>Off</UseSlaveConnection>
		<DBSlaveHost>localhost</DBSlaveHost>
		<DBSlaveName/>
		<DBSlaveLogin>root</DBSlaveLogin>
		<DBSlavePassword/>
		<DefaultLanguage>English</DefaultLanguage>
		<DefaultTimeZone>0</DefaultTimeZone>
		<DefaultTimeFormat>F24</DefaultTimeFormat>
		<DefaultDateFormat>MM/DD/YYYY</DefaultDateFormat>
		<AllowRegistration>Off</AllowRegistration>
		<RegistrationDomains/>
		<RegistrationQuestions/>
		<AllowPasswordReset>Off</AllowPasswordReset>
		<EnableLogging>Off</EnableLogging>
		<EnableEventLogging>Off</EnableEventLogging>
		<LoggingLevel>Error</LoggingLevel>
		<EnableMobileSync>Off</EnableMobileSync>
		<TenantGlobalCapa/>
		<LoginStyleImage/>
		<AppStyleImage/>
		<DefaultTab/>
		<RedirectToHttps>Off</RedirectToHttps>
		<PasswordMinLength>0</PasswordMinLength>
		<PasswordMustBeComplex>Off</PasswordMustBeComplex>
	</Common>
	<WebMail>
		<AllowWebMail>On</AllowWebMail>
		<IncomingMailProtocol>IMAP4</IncomingMailProtocol>
		<IncomingMailServer>127.0.0.1</IncomingMailServer>
		<IncomingMailPort>143</IncomingMailPort>
		<IncomingMailUseSSL>Off</IncomingMailUseSSL>
		<OutgoingMailServer>127.0.0.1</OutgoingMailServer>
		<OutgoingMailPort>587</OutgoingMailPort>
		<OutgoingMailAuth>AuthCurrentUser</OutgoingMailAuth>
		<OutgoingMailLogin/>
		<OutgoingMailPassword/>
		<OutgoingMailUseSSL>Off</OutgoingMailUseSSL>
		<OutgoingSendingMethod>Specified</OutgoingSendingMethod>
		<UserQuota>0</UserQuota>
		<ShowQuotaBar>Off</ShowQuotaBar>
		<AutoCheckMailInterval>5</AutoCheckMailInterval>
		<DefaultSkin>Default</DefaultSkin>
		<MailsPerPage>20</MailsPerPage>
		<AllowUsersChangeInterfaceSettings>On</AllowUsersChangeInterfaceSettings>
		<AllowUsersChangeEmailSettings>On</AllowUsersChangeEmailSettings>
		<EnableAttachmentSizeLimit>Off</EnableAttachmentSizeLimit>
		<AttachmentSizeLimit>10240000</AttachmentSizeLimit>
		<ImageUploadSizeLimit>0</ImageUploadSizeLimit>
		<AllowLanguageOnLogin>On</AllowLanguageOnLogin>
		<FlagsLangSelect>Off</FlagsLangSelect>
		<LoginFormType>Email</LoginFormType>
		<LoginSignMeType>DefaultOn</LoginSignMeType>
		<LoginAtDomainValue/>
		<UseLoginWithoutDomain>Off</UseLoginWithoutDomain>
		<AllowNewUsersRegister>On</AllowNewUsersRegister>
		<AllowUsersAddNewAccounts>Off</AllowUsersAddNewAccounts>
		<AllowOpenPGP>Off</AllowOpenPGP>
		<AllowIdentities>Off</AllowIdentities>
		<AllowInsertImage>On</AllowInsertImage>
		<AllowBodySize>Off</AllowBodySize>
		<MaxBodySize>600</MaxBodySize>
		<MaxSubjectSize>255</MaxSubjectSize>
		<Layout>Bottom</Layout>
		<AlwaysShowImagesInMessage>Off</AlwaysShowImagesInMessage>
		<SaveMail>Always</SaveMail>
		<IdleSessionTimeout>0</IdleSessionTimeout>
		<UseSortImapForDateMode>Off</UseSortImapForDateMode>
		<UseThreadsIfSupported>On</UseThreadsIfSupported>
		<DetectSpecialFoldersWithXList>On</DetectSpecialFoldersWithXList>
		<EnableLastLoginNotification>Off</EnableLastLoginNotification>
		<ExternalHostNameOfLocalImap/>
		<ExternalHostNameOfLocalSmtp/>
		<ExternalHostNameOfDAVServer/>
	</WebMail>
	<Calendar>
		<AllowCalendar>Off</AllowCalendar>
		<ShowWeekEnds>Off</ShowWeekEnds>
		<WorkdayStarts>9</WorkdayStarts>
		<WorkdayEnds>18</WorkdayEnds>
		<ShowWorkDay>On</ShowWorkDay>
		<WeekStartsOn>Monday</WeekStartsOn>
		<DefaultTab>Month</DefaultTab>
		<AllowReminders>On</AllowReminders>
	</Calendar>
	<Contacts>
		<AllowContacts>On</AllowContacts>
		<ContactsPerPage>20</ContactsPerPage>
		<ShowGlobalContactsInAddressBook>Off</ShowGlobalContactsInAddressBook>
		<GlobalAddressBookVisibility>Off</GlobalAddressBookVisibility>
	</Contacts>
	<Files>
		<AllowFiles>Off</AllowFiles>
		<EnableSizeLimit>Off</EnableSizeLimit>
		<SizeLimit>0</SizeLimit>
	</Files>
	<Sip>
		<AllowSip>Off</AllowSip>
		<Realm/>
		<WebsocketProxyUrl/>
		<OutboundProxyUrl/>
		<CallerID/>
	</Sip>
	<Twilio>
		<AllowTwilio>Off</AllowTwilio>
		<PhoneNumber/>
		<AccountSID/>
		<AuthToken/>
		<AppSID/>
	</Twilio>
	<Social>
		<FacebookAllow>Off</FacebookAllow>
		<FacebookId/>
		<FacebookSecret/>
		<GoogleAllow>Off</GoogleAllow>
		<GoogleId/>
		<GoogleSecret/>
		<GoogleApiKey/>
		<TwitterAllow>Off</TwitterAllow>
		<TwitterId/>
		<TwitterSecret/>
		<DropboxAllow>Off</DropboxAllow>
		<DropboxSecret/>
		<DropboxKey/>
	</Social>
	<Helpdesk>
		<AllowHelpdesk>Off</AllowHelpdesk>
		<AdminEmailAccount/>
		<ClientIframeUrl/>
		<AgentIframeUrl/>
		<SiteName/>
		<StyleAllow>Off</StyleAllow>
		<StyleImage/>
		<StyleText/>
		<FetcherType>NONE</FetcherType>
		<FacebookAllow>Off</FacebookAllow>
		<FacebookId/>
		<FacebookSecret/>
		<GoogleAllow>Off</GoogleAllow>
		<GoogleId/>
		<GoogleSecret/>
		<TwitterAllow>Off</TwitterAllow>
		<TwitterId/>
		<TwitterSecret/>
	</Helpdesk>
</Settings>