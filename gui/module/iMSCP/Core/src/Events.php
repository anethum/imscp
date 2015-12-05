<?php
/**
 * i-MSCP - internet Multi Server Control Panel
 * Copyright (C) 2010-2015 by Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

namespace iMSCP\Core;

/**
 * Class Events
 * @package iMSCP\Events
 */
class Events
{
    /**
     * The onLoginScriptStart event is triggered at the very beginning of Login script.
     *
     * The listeners receive an Zend\EventManager\Event object.
     *
     * @const string
     */
    const onLoginScriptStart = 'onLoginScriptStart';

    /**
     * The onLoginScriptEnd event is triggered at the end of Login script.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onLoginScriptEnd = 'onLoginScriptEnd';

    /**
     * The onLostPasswordScriptStart event is triggered at the very beginning of the LostPassword script.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onLostPasswordScriptStart = 'onLostPasswordScriptStart';

    /**
     * The onLostPasswordScriptEnd event is triggered at the end of the LostPassword script.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onLostPasswordScriptEnd = 'onLostPasswordScriptEnd';

    /**
     * The onAdminScriptStart event is triggered at the very beginning of admin scripts.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onAdminScriptStart = 'onAdminScriptStart';

    /**
     * The onAdminScriptEnd event is triggered at the end of admin scripts.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onAdminScriptEnd = 'onAdminScriptEnd';

    /**
     * The onResellerScriptStart event is triggered at the very beginning of reseller scripts.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onResellerScriptStart = 'onResellerScriptStart';

    /**
     * The onResellerScriptEnd event is triggered at the end of reseller scripts.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onResellerScriptEnd = 'onResellerScriptEnd';

    /**
     * The onClientScriptStart event is triggered at the very beginning of client scripts.
     *
     * The listeners receive a Zend\EventManager\Event instance.
     *
     * @const string
     */
    const onClientScriptStart = 'onClientScriptStart';

    /**
     * The onClientScriptEnd event is triggered at the end of client scripts.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onClientScriptEnd = 'onClientScriptEnd';

    /**
     * The onExceptioToBrowserStart event is triggered before of exception browser write process.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - context: iMSCP\Exception\BrowserExceptionWriter instance
     *
     * @deprecated This event is deprecated and no longer triggered
     * @const string
     */
    const onExceptionToBrowserStart = 'onExceptionToBrowserStart';

    /**
     * The onExceptionToBrowserEnd event is triggered at the end of exception browser write process.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - context: iMSCP\Exception\BrowserExceptionWriter instance
     * - templateEngine: TemplateEngine instance
     *
     * @deprecated This event is deprecated and no longer triggered
     * @const string
     */
    const onExceptionToBrowserEnd = 'onExceptionToBrowserEnd';

    /**
     * The onBeforeEditAdminGeneralSettings event is triggered before the admin general settings are edited.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onBeforeEditAdminGeneralSettings = 'onBeforeEditAdminGeneralSettings';

    /**
     * The onAfterEditAdminGeneralSettings event is triggered after the admin general settings are edited.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onAfterEditAdminGeneralSettings = 'onAfterEditAdminGeneralSettings';

    /**
     * The onBeforeAddUser event is triggered before an user is created.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onBeforeAddUser = 'onBeforeAddUser';

    /**
     * The onAfterAddUser event is triggered after an user is created.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onAfterAddUser = 'onAfterAddUser';

    /**
     * The onBeforeEditUser event is triggered before an user is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - userId: (int) User identifier
     *
     * @const string
     */
    const onBeforeEditUser = 'onBeforeEditUser';

    /**
     * The onAfterEditUser event is triggered after an user is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - userId: (int) User identifier
     *
     * @const string
     */
    const onAfterEditUser = 'onAfterEditUser';

    /**
     * The onBeforeDeleteUser event is triggered before an user is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - userId: (int) User identifier
     *
     * @const string
     */
    const onBeforeDeleteUser = 'onBeforeDeleteUser';

    /**
     * The onAfterDeleteUser event is triggered after an user is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - userId: (int) User identifier
     *
     * @const string
     */
    const onAfterDeleteUser = 'onAfterDeleteUser';

    /**
     * The onBeforeDeleteDomain event is triggered before a customer account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - customerId: (int) Customer identifier
     * - customerName: (string) Customer name
     *
     * @const string
     */
    const onBeforeDeleteCustomer = 'onBeforeDeleteCustomer';

    /**
     * The onAfterDeleteCustomer event is triggered after a customer account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - customerId: (int) Customer identifier
     * - customerName: (string) Customer name
     *
     * @const string
     */
    const onAfterDeleteCustomer = 'onAfterDeleteCustomer';

    /**
     * The onBeforeAddFtp event is triggered after an Ftp account is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - ftpUserId: (string) FTP user identifier
     * - ftpPassword: (string) FTP user password
     * - ftpUserUid: (int) FTP user uid
     * - ftpUserGid: (int) FTP user gid
     * - ftpUserShell: (string) FTP user shell
     * - ftpUserHome: (string) FTP user homedir
     *
     * @const string
     */
    const onBeforeAddFtp = 'onBeforeAddFtp';

    /**
     * The onAfterAddFtp event is triggered after an Ftp account is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - ftpUserId: (string) FTP user identifier
     * - ftpPassword: (string) FTP user password
     * - ftpUserUid: (int) FTP user uid
     * - ftpUserGid: (int) FTP user gid
     * - ftpUserShell: (string) FTP user shell
     * - ftpUserHome: (string) FTP user homedir
     *
     * @const string
     */
    const onAfterAddFtp = 'onAfterAddFtp';

    /**
     * The onBeforeEditFtp event is triggered before an Ftp account is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - ftpUserId: (string) FTP user identifier
     * - ftpPassword: (string) FTP user password
     *
     * @const string
     */
    const onBeforeEditFtp = 'onBeforeEditFtp';

    /**
     * The onAfterEditFtp event is triggered after an Ftp account is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - ftpUserId: (string) FTP user identifier
     * - ftpPassword: (string) FTP user password
     *
     * @const string
     */
    const onAfterEditFtp = 'onAfterEditFtp';

    /**
     * The onBeforeDeleteFtp event is triggered before an Ftp account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - ftpUserId: (string) FTP user identifier
     *
     * @const string
     */
    const onBeforeDeleteFtp = 'onBeforeDeleteFtp';

    /**
     * The onAfterDeleteFtp event is triggered after an Ftp account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - ftpUserId: (string) FTP user identifier
     *
     * @const string
     */
    const onAfterDeleteFtp = 'onAfterDeleteFtp';

    /**
     * The onBeforeAddSqlUser event is triggered before an Sql user is created.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onBeforeAddSqlUser = 'onBeforeAddSqlUser';

    /**
     * The onAfterAddSqlUser event is triggered after an Sql user is created.
     *
     * The listeners receive a Zend\EventManager\Event object.
     *
     * @const string
     */
    const onAfterAddSqlUser = 'onAfterAddSqlUser';

    /**
     * The onBeforeEditSqlUser event is triggered before an Sql user is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlUserId: (int) SQL user identifier
     *
     * @const string
     */
    const onBeforeEditSqlUser = 'onBeforeEditSqlUser';

    /**
     * The onAfterEditSqlUser event is triggered after an Sql user is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlUserId: (int) SQL user identifier
     *
     * @const string
     */
    const onAfterEditSqlUser = 'onAfterEditSqlUser';

    /**
     * The onBeforeDeleteSqlUser event is triggered before an Sql user is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlUserId: (int) SQL user identifier
     * - sqlUserNale (string) SQL user name
     *
     * @const string
     */
    const onBeforeDeleteSqlUser = 'onBeforeDeleteSqlUser';

    /**
     * The onAfterDeleteSqlUser event is triggered after an Sql user is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlUserId: (int) SQL user identifier
     * - sqlUserNale (string) SQL user name
     *
     * @const string
     */
    const onAfterDeleteSqlUser = 'onAfterDeleteSqlUser';

    /**
     * The onBeforeAddSqlDb event is triggered before an Sql database is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - dbName: (string) SQL database name
     *
     * @const string
     */
    const onBeforeAddSqlDb = 'onBeforeAddSqlDb';

    /**
     * The onAfterAddSqlDb event is triggered after an Sql database is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - dbName: (string) SQL database name
     *
     * @const string
     */
    const onAfterAddSqlDb = 'onAfterAddSqlDb';

    /**
     * The onBeforeDeleteSqlDb event is triggered before an Sql database is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlDbId: (int) SQL database identifier
     * - sqlDbName: (string) SQL database name
     *
     * @const string
     */
    const onBeforeDeleteSqlDb = 'onBeforeDeleteSqlDb';

    /**
     * The onAfterDeleteSqlDb event is triggered after an Sql database is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - sqlDbId: (int) SQL database identifier
     * - sqlDbName: (string) SQL database name
     *
     * @const string
     */
    const onAfterDeleteSqlDb = 'onAfterSqlDb';

    /**
     * The onBeforeAddDomain event is triggered before a domain is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - domainName: (string) Domain anme
     * - createdBy: (int) Reseller identifier
     * - customerId: (int) Customer identifier
     * - customerEmail: (string) Customer email address
     *
     * @const string
     */
    const onBeforeAddDomain = 'onBeforeAddDomain';

    /**
     * The onAfterAddDomain event is triggered after a domain is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - domainName: (string) Domain name
     * - createdBy: (int) Reseller identifier
     * - customerId: (int) Customer identifier
     * - customerEmail: (string) Customer email
     * - domainId: (int) Domain identifier
     *
     * @const string
     */
    const onAfterAddDomain = 'onAfterAddDomain';

    /**
     * The onBeforeEditDomain event is triggered before a domain is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - domainId: (int) Domain identifier
     *
     * @const string
     */
    const onBeforeEditDomain = 'onBeforeEditDomain';

    /**
     * The onAfterEditDomain event is triggered agfter a domain is edited.
     *
     * The listeners receive an Zend\EventManager\Event object with the following parameter:
     *
     * - domainId: (int) Domain identifier
     *
     * @const string
     */
    const onAfterEditDomain = 'onAfterEditDomain';

    /**
     * The onBeforeAddSubdomain event is triggered after a subdomain is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - subdomainName: (string) Subdomain nanme
     * - subdomainType: (string) Subdomain type (als|dmn)
     * - parentDomainId: (int) Parent domain identifier
     * - mountPoint: (string) Subdomain mount point
     * - forwardUrl: (string) Forward URL
     * - customerId: (int) Customer identifier
     *
     * @const string
     */
    const onBeforeAddSubdomain = 'onBeforeAddSubdomain';

    /**
     * The onAfterAddSubdomain event is triggered after a subdomain is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - subdomainName: (string) Subdomain nanme
     * - subdomainType: (string) Subdomain type (als|dmn)
     * - parentDomainId: (int) Parent domain identifier
     * - mountPoint: (string) Subdomain mount point
     * - forwardUrl: (string) Forward URL
     * - customerId: (int) Customer identifier
     * - subdomainId: (int) Subdomain identifier
     *
     * @const string
     */
    const onAfterAddSubdomain = 'onAfterAddSubdomain';

    /**
     * The onBeforeEditSubdomain event is triggered after a subdomain is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - subdomainId: (int) Subdomain identifier
     * - subdomainName: (string) Subdomain name
     * - subdomainType: (string) Subdomain type (dmn|als)
     *
     * @const string
     */
    const onBeforeEditSubdomain = 'onBeforeEditSubdomain';

    /**
     * The onAfterEditSubdomain event is triggered after a subdomain is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - subdomainId: (int) Subdomain identifier
     * - subdomainName: (string) Subdomain name
     * - subdomainType: (string) Subdomain type (dmn|als)
     *
     * @const string
     */
    const onAfterEditSubdomain = 'onAfterEditSubdomain';

    /**
     * The onBeforeDeleteSubdomain event is triggered before a subdomain is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - subdomainId: (int) Subdomain identifier
     * - subdomainName: (string) Subdomain name
     * - type: (string) Subdomain type (sub|alssub)
     *
     * @const string
     */
    const onBeforeDeleteSubdomain = 'onBeforeDeleteSubdomain';

    /**
     * The onAfterDeleteSubdomain event is triggered after a subdomain is delteded.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - subdomainId: (int) Subdomain identifier
     * - subdomainName: (string) Subdomain name
     * - type: (string) Subdomain type (sub|alssub)
     *
     * @const string
     */
    const onAfterDeleteSubdomain = 'onAfterDeleteSubdomain';

    /**
     * The onBeforeAddDomainAlias event is triggered before a domain alias is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - domainId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     *
     * @const string
     */
    const onBeforeAddDomainAlias = 'onBeforeAddDomainAlias';

    /**
     * The onAfterAddDomainAlias event is triggered after a domain alias is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - domainId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     * - domainAliasId: (int) Domain alias identifier
     *
     * @const string
     */
    const onAfterAddDomainAlias = 'onAfterAddDomainAlias';

    /**
     * The onBeforeEditDomainAlias event is triggered before a domain alias is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - domainAliasId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     *
     * @const string
     */
    const onBeforeEditDomainAlias = 'onBeforeEditDomainAlias';

    /**
     * The onAfterEditDomainALias event is triggered after a domain alias is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - domainAliasId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     *
     * @const string
     */
    const onAfterEditDomainAlias = 'onAfterEditDomainAlias';

    /**
     * The onBeforeDeleteDomainAlias event is triggered before a domain alias is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - domainAliasId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     *
     * @const string
     */
    const onBeforeDeleteDomainAlias = 'onBeforeDeleteDomainAlias';

    /**
     * The onAfterDeleteDomainAlias event is triggered after a domain alias is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - domainAliasId: (int) Domain alias identifier
     * - domainAliasName: (string) Domain alias name
     *
     * @const string
     */
    const onAfterDeleteDomainAlias = 'onAfterDeleteDomainAlias';

    /**
     * The onBeforeAddMail event is triggered after a mail account is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - mailUsername: (string) Mail username
     * - mailAddress: (string) Mail address
     *
     * @const string
     */
    const onBeforeAddMail = 'onBeforeAddMail';

    /**
     * The onAfterAddMail event is triggered after a mail account is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - mailUsername: (string) Mail username
     * - mailAddress: (string) Mail address
     * - mailId: (int) Mail identifier
     *
     * @const string
     */
    const onAfterAddMail = 'onAfterAddMail';

    /**
     * The onBeforeEditMail event is triggered before a mail account is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailId: (int) Mail identifier
     *
     * @const string
     */
    const onBeforeEditMail = 'onBeforeEditMail';

    /**
     * The onAfterEditMail event is triggered after a mail account is edited.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailId: (int) Mail identifier
     *
     * @const string
     */
    const onAfterEditMail = 'onAfterEditMail';

    /**
     * The onBeforeDeleteMail event is triggered before a mail account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailId: (int) Mail identifier
     *
     * @const string
     */
    const onBeforeDeleteMail = 'onBeforeDeleteMail';

    /**
     * The onAfterDeleteMail event is triggered after a mail account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailId: (int) Mail identifier
     *
     * @const string
     */
    const onAfterDeleteMail = 'onAfterDeleteMail';

    /**
     * The onBeforeAddMailCatchall event is triggered after a mail catchall is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - mailCatchall: (string) Mail catchall
     * - mailForwardList: (array) Mail forward list
     *
     * @const string
     */
    const onBeforeAddMailCatchall = 'onBeforeAddMailCatchall';

    /**
     * The onAfterAddMailCatchall event is triggered after a mail catchall is created.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - mailCatchallId: (int) Mail catchall identifier
     * - mailCatchall: (string) Mail catchall
     * - mailForwardList: (array) Mail forward list
     *
     * @const string
     */
    const onAfterAddMailCatchall = 'onAfterAddMailCatchall';

    /**
     * The onBeforeDeleteMailCatchall event is triggered before a mail catchall is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailCatchallId: (int) Mail catchall identifier
     *
     * @const string
     */
    const onBeforeDeleteMailCatchall = 'onBeforeDeleteMailCatchall';

    /**
     * The onAfterDeleteMail event is triggered after a mail account is deleted.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - mailCatchallId: (int) Mail catchall identifier
     *
     * @const string
     */
    const onafterDeleteMailCatchall = 'onafterDeleteMailCatchall';

    /**
     * The onBeforeAssembleTemplateFiles event is triggered before the first parent template is loaded.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - context: TemplateEngine instance
     * - templatePath: (string) Template file path
     *
     * @const string
     */
    const onBeforeAssembleTemplateFiles = 'onBeforeAssembleTemplateFiles';

    /**
     * The onAfterAssembleTemplateFiles event is triggered after the first parent template is loaded.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - context: TemplateEngine instance
     * - templateContent: (string) Template content
     *
     * @const string
     */
    const onAfterAssembleTemplateFiles = 'onBeforeAssembleTemplateFiles';

    /**
     * The onBeforeLoadTemplateFile event is triggered before a template is loaded.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - context: TemplateEngine instance
     * - templatePath: (string) Template file path
     *
     * @const string
     */
    const onBeforeLoadTemplateFile = 'onBeforeLoadTemplateFile';

    /**
     * The onAfterLoadTemplateFile event is triggered after the loading of a template file.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - context: TemplateEngine instance
     * - templateContent: (string) Template content
     *
     * @const string
     */
    const onAfterLoadTemplateFile = 'onAfterLoadTemplateFile';

    /**
     * The onBeforeGenerateNavigation event is triggeed before the navigation is generated.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     */
    const onBeforeGenerateNavigation = 'onBeforeGenerateNavigation';

    /**
     * The onAfterGenerateNavigation event is triggered after the navigation is generated.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - templateEngine: TemplateEngine instance
     *
     * @const string
     *
     */
    const onAfterGenerateNavigation = 'onAfterGenerateNavigation';

    /**
     * The onBeforeAddExternalMailServer event is triggered before addition of external mail server entries in database.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - externalMailServerEntries: (array) External mail server entries
     *
     * @const string
     */
    const onBeforeAddExternalMailServer = 'onBeforeAddExternalMailServer';

    /**
     * The onAfterAddExternalMailServer event is triggered after addition of external mail server entries in database.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameter:
     *
     * - externalMailServerEntries: (array) External mail server entries
     *
     * @const string
     */
    const onAfterAddExternalMailServer = 'onAfterAddExternalMailServer';

    /**
     * The onBeforeChangeDomainStatus event is triggered before an user account is being activated or deactivated.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - customerId: (int) Customer identifier
     * - action: (string) Action
     *
     * @const string
     */
    const onBeforeChangeDomainStatus = 'onBeforeChangeDomainStatus';

    /**
     * The onAfterChangeDomainStatus event is triggered before an user account get activated or deactivated.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - customerId: (int) Customer identifier
     * - action: (string) Action
     *
     * @const string
     */
    const onAfterChangeDomainStatus = 'onAfterChangeDomainStatus';

    /**
     * The onBeforeSendCircular event is triggered before an admin or reseller send a circular.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - sender_name: (string) Sender name
     * - sender_email: (string) Sender email
     * - rcpt_to: (string) Recipient type (all_users|aministrator_resellers|administrators_customers|resellers_customers|administrators|resellers|customers)
     * - subject: (string) Circular subject
     * - body: (string) Circular body
     */
    const onBeforeSendCircular = 'onBeforeSendCircular';

    /**
     * The onAfterSendCircular event is triggered after an admin or reseller has sent a circular.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - sender_name: (string) Sender name
     * - sender_email: (string) Sender email
     * - rcpt_to: (string) Recipient type (all_users|aministrator_resellers|administrators_customers|resellers_customers|administrators|resellers|customers)
     * - subject: (string) Circular subject
     * - body: (string) Circular body
     */
    const onAfterSendCircular = 'onAfterSendCircular';

    /**
     * The onGetJsTranslations event is triggered by the i18n_getJsTranslations() function.
     *
     * The listeners receive a Zend\EventManager\Event object with the following parameters:
     *
     * - translations An ArrayObject which allows the plugins to add their own JS translations
     *
     * @see i18n_getJsTranslations() for more details
     */
    const onGetJsTranslations = 'onGetJsTranslations';

    /**
     * The onBeforeCreateConsoleApplicationevent allow 3rd-party components to add their own commands into the i-MSCP
     * Frontend Command Line Tool.
     *
     * The listeners receive an iMSCP\Tools\Console\ConsoleEvent object
     */
    const onBeforeCreateConsoleApplication = 'onBeforeCreateConsoleApplication';
}