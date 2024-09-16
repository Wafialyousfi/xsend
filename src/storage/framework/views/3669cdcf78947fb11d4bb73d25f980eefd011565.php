<aside class="sidebar" id="sidebar">
    <div class="sidebar-top">
        <div class="site-logo">
            <?php
                $panel_logo = $general->panel_logo ?? "panel_logo.png";
                $site_icon  = $general->site_icon ?? "site_icon.png";
            ?>

            <a href="<?php echo e(route('admin.dashboard')); ?>">
                <img src="<?php echo e(showImage(filePath()['panel_logo']['path'].'/'.$panel_logo,filePath()['panel_logo']['size'])); ?>" class="logo-lg" alt="">
                <img src="<?php echo e(showImage(filePath()['site_logo']['path'].'/'.$site_icon)); ?>" class="logo-sm" alt="">
            </a>
        </div>

        <div class="menu-search-container">
            <input class=" form-control menu-search" placeholder="<?php echo e(translate('Search Here')); ?>" type="search" name="" id="searchMenu">
        </div>
    </div>

    <div class="sidebar-menu-container" data-simplebar>
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Dashboard')); ?>"><?php echo e(translate('Dashboard')); ?></li>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(request()->routeIs('admin.dashboard') ? 'active' :''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                    <span><i class="las la-tachometer-alt"></i></span>
                    <p><?php echo e(translate('Overview')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Membership Management')); ?>"><?php echo e(translate('Membership Management')); ?></li>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.plan.index', 'admin.plan.create', 'admin.plan.edit'])); ?>" href="<?php echo e(route('admin.plan.index')); ?>">
                    <span><i class="lab la-buffer"></i></span>
                    <p><?php echo e(translate('Membership Plans')); ?></p>
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.user.*')); ?>" href="<?php echo e(route('admin.user.index')); ?>">
                    <span><i class="las la-users-cog"></i></span>
                    <p><?php echo e(translate('User Management')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Contact Management')); ?>"><?php echo e(translate('Contact Management')); ?></li>
            <?php
                $contactRouteNames = [
                    'admin.contact.index',
                    'admin.contact.create',
                    'admin.contact.settings.index',
                    'admin.contact.group.index',
                ];
                $isContactActive = request()->routeIs($contactRouteNames);
            ?>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.contact.group.index'])); ?>" href="<?php echo e(route('admin.contact.group.index')); ?>">
                    <span><i class="las la-users"></i></span>
                    <p><?php echo e(translate('Group')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.contact.index', 'admin.contact.create'])); ?>" href="<?php echo e(route('admin.contact.index')); ?>">
                    <span><i class="las la-address-book"></i></span>
                    <p><?php echo e(translate('Contact Details')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.contact.settings.index'])); ?>" href="<?php echo e(route('admin.contact.settings.index')); ?>">
                    <span><i class="las la-tag"></i></span>
                    <p><?php echo e(translate('Contact Attribute')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Communications Hub')); ?>"><?php echo e(translate('Communications Hub')); ?></li>
            
            <?php
                $smsRouteNames = [
                    'admin.sms.create',
                    'admin.sms.search',
                    'admin.sms.index',
                ];
                $campaignSmsRoutes = [
                    'admin.campaign.sms'
                ];

                if (request()->route()->type == 'sms') {
                    $campaignSmsRoutes[1] = 'admin.campaign.create';
                    $campaignSmsRoutes[2] = 'admin.campaign.edit';
                }
                $isSmsActive = request()->routeIs($smsRouteNames);

            ?>

            <?php
                $routeNames = [
                    'admin.whatsapp.create',
                    'admin.whatsapp.search',
                    'admin.whatsapp.index',
                ];
                $campaignWhatsappRoutes = [
                    'admin.campaign.whatsapp'
                ];

                if (request()->route()->type == 'whatsapp') {
                    $campaignWhatsappRoutes[1] = 'admin.campaign.create';
                    $campaignWhatsappRoutes[2] = 'admin.campaign.edit';
                }

                $isWhatsappActive = request()->routeIs($routeNames);
            ?>

            <?php

                $routeNames = [
                    'admin.email.send',
                    'admin.email.search',
                    'admin.email.index',
                ];

                $campaignEmailRoutes = [
                    'admin.campaign.email'
                ];

                if (request()->route()->type == 'email') {
                    $campaignEmailRoutes[1] = 'admin.campaign.create';
                    $campaignEmailRoutes[2] = 'admin.campaign.edit';
                }

                $isEmailActive = request()->routeIs($routeNames);
            ?>
               
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isSmsActive ? 'active' :''); ?>" data-bs-toggle="collapse" href="#collapseCommunicationsHubSms"
                role="button" aria-expanded="true" aria-controls="collapseCommunicationsHubSms">
                    <span><i class="las la-sms"></i></span>
                    <p><?php echo e(translate('SMS Messages')); ?>  <small><i class="las la-angle-down"></i></small>
                    </p>
                </a>
            
                <div class="side-menu-dropdown collapse <?php echo e($isSmsActive ? 'show' :''); ?>"  id="collapseCommunicationsHubSms">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.sms.create')); ?>" href="<?php echo e(route('admin.sms.create')); ?>">
                                <p><?php echo e(translate('Send')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.sms.index', 'admin.sms.search'])); ?>" href="<?php echo e(route('admin.sms.index')); ?>">
                                <p><?php echo e(translate('History')); ?></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isWhatsappActive ? 'active' :''); ?>" data-bs-toggle="collapse" href="#collapseCommunicationsHubWhatsapp"
                    role="button" aria-expanded="true" aria-controls="collapseCommunicationsHubWhatsapp">
                        <span><i class="lab la-whatsapp"></i></span>
                        <p><?php echo e(translate('WhatsApp Messages')); ?><small><i class="las la-angle-down"></i></small>
                        </p>
                    </a>

                    <div class="side-menu-dropdown collapse <?php echo e($isWhatsappActive ? 'show' :''); ?>"  id="collapseCommunicationsHubWhatsapp">
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a class="sidebar-menu-link <?php echo e(menuActive('admin.whatsapp.create')); ?>" href="<?php echo e(route('admin.whatsapp.create')); ?>">
                                    <p><?php echo e(translate('Send')); ?></p>
                                </a>
                            </li>

                            <li class="sub-menu-item">
                                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.whatsapp.index', 'admin.whatsapp.search'])); ?>" href="<?php echo e(route('admin.whatsapp.index')); ?>">
                                    <p><?php echo e(translate('History')); ?></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isEmailActive ? 'active' : ''); ?>" data-bs-toggle="collapse" href="#collapseCommunicationsHubEmail"
                role="button" aria-expanded="true" aria-controls="collapseCommunicationsHubEmail">
                    <span><i class="las la-envelope"></i></span>
                    <p><?php echo e(translate('Email Messages')); ?>  <small><i class="las la-angle-down"></i></small>
                    </p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e($isEmailActive ? 'show' : ''); ?>"  id="collapseCommunicationsHubEmail">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.email.send')); ?>" href="<?php echo e(route('admin.email.send')); ?>">
                                <p><?php echo e(translate('Send')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.email.index', 'admin.email.search'])); ?>" href="<?php echo e(route('admin.email.index')); ?>">
                                <p><?php echo e(translate('History')); ?></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
                    
            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Marketing & Campaign')); ?>"><?php echo e(translate('Marketing & Campaign')); ?></li>

            <?php
                $routeNames = [
                    'admin.campaign.create',
                    'admin.campaign.edit',
                    'admin.campaign.sms',
                    'admin.campaign.whatsapp',
                    'admin.campaign.email',
                ];

                $isCampaignActive = request()->routeIs($routeNames);
            ?>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive($campaignSmsRoutes)); ?>" href="<?php echo e(route('admin.campaign.sms')); ?>">
                    <span><i class="fa-solid fa-comment-dots"></i></span>
                    <p><?php echo e(translate('SMS Campaign')); ?></p>
                </a>
            </li>
            
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive($campaignWhatsappRoutes)); ?>" href="<?php echo e(route('admin.campaign.whatsapp')); ?>">
                    <span><i class="fa-brands fa-whatsapp"></i></span>
                    <p><?php echo e(translate('WhatsApp Campaign')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive($campaignEmailRoutes)); ?>" href="<?php echo e(route('admin.campaign.email')); ?>">
                    <span><i class="fa-solid fa-envelopes-bulk"></i></span>
                    <p><?php echo e(translate('Email Campaign')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Message Templates')); ?>"><?php echo e(translate('Message Templates')); ?></li>
            <?php
                $isTemplatesActive = request()->routeIs('admin.template.email.list.user', 'admin.template.email.list.own', 'admin.template.email.list.default', 'admin.template.email.list.global', 'admin.template.user', 'admin.template.own', 'admin.template.email.create', 'admin.template.email.edit', 'admin.mail.templates.edit');
            ?>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.template.own')); ?>" href="<?php echo e(route('admin.template.own')); ?>">
                    <span><i class="fa-regular fa-file"></i></span>
                    <p><?php echo e(translate('SMS & WhatsApp')); ?></p>
                    <?php if($sms_template_request > 0): ?>
                        <div class="menu-alert badge bg-danger"> <?php echo e($sms_template_request); ?></div>
                    <?php endif; ?>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.template.email.list.user', 'admin.template.email.list.own', 'admin.template.email.list.default', 'admin.template.email.list.global', 'admin.template.email.create', 'admin.template.email.edit', 'admin.mail.templates.edit'])); ?>" href="<?php echo e(route('admin.template.email.list.own')); ?>">
                    <span><i class="fa-solid fa-envelope-open-text"></i></span>
                    <p><?php echo e(translate('Email Template')); ?></p>
                    <?php if($mail_template_request > 0): ?>
                        <div class="menu-alert badge bg-danger"> <?php echo e($mail_template_request); ?></div>
                    <?php endif; ?>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Communications Gateway')); ?>"><?php echo e(translate('Communications Gateway')); ?></li>

            <?php
                $isGatewayActive = request()->routeIs('admin.sms.gateway.sms.api', 'admin.sms.gateway.android', 'admin.gateway.whatsapp.device', 'admin.mail.list',  'admin.mail.edit', 'admin.template.index');
            ?>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.sms.gateway.*'])); ?>" href="<?php echo e(route('admin.sms.gateway.sms.api')); ?>">
                    <span><i class="las la-comment-medical"></i></span>
                    <p><?php echo e(translate('SMS')); ?></p>
                </a>
            </li>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.gateway.whatsapp.*', 'admin.template.index'])); ?>" href="<?php echo e(route('admin.gateway.whatsapp.device')); ?>">
                    <span><i class="lab la-whatsapp-square"></i></span>
                    <p><?php echo e(translate('WhatsApp')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.mail.list', 'admin.mail.edit'])); ?>" href="<?php echo e(route('admin.mail.list')); ?>">
                    <span><i class="fa-solid fa-square-envelope"></i></span>
                    <p><?php echo e(translate('Email')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Payment System')); ?>"><?php echo e(translate('Payment System')); ?></li>
            
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive(['admin.payment.method.*'])); ?>" href="<?php echo e(route('admin.payment.method.index')); ?>">
                    <span><i class="fa-regular fa-credit-card"></i></span>
                    <p><?php echo e(translate('Automatic Payment')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.manual.payment.*')); ?>" href="<?php echo e(route('admin.manual.payment.index')); ?>">
                    <span><i class="fa-solid fa-landmark"></i></span>
                    <p><?php echo e(translate('Manual Payment')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('View Logs & Reports')); ?>"><?php echo e(translate('View Logs & Reports')); ?></li>
            
            <?php
                $isCreditLogsActive = request()->routeIs('admin.report.credit.index','admin.report.credit.search','admin.report.whatsapp.index','admin.report.whatsapp.search', 'admin.report.email.credit.index','admin.report.email.credit.search');
            ?>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isCreditLogsActive  ? 'active' : ''); ?> " data-bs-toggle="collapse" href="#collapseCreditLogs"
                   role="button" aria-expanded="true" aria-controls="collapseCreditLogs">
                    <span><i class="las la-history"></i></span>
                    <p><?php echo e(translate('Credit Logs')); ?>  <small><i class="las la-angle-down"></i></small>
                    </p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e($isCreditLogsActive  ? 'show' :''); ?>"  id="collapseCreditLogs">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.report.credit.index','admin.report.credit.search'])); ?>" href="<?php echo e(route('admin.report.credit.index')); ?>">
                                <p><?php echo e(translate('SMS')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link  <?php echo e(menuActive(['admin.report.whatsapp.index','admin.report.whatsapp.search'])); ?>" href="<?php echo e(route('admin.report.whatsapp.index')); ?>">
                                <p><?php echo e(translate('WhatsApp')); ?></p>
                            </a>
                        </li>


                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.report.email.credit.index','admin.report.email.credit.search'])); ?>" href="<?php echo e(route('admin.report.email.credit.index')); ?>">
                                <p><?php echo e(translate('Email')); ?></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <?php
                $isReportsActive = request()->routeIs('admin.report.transaction.index','admin.report.transaction.search','admin.report.subscription.index','admin.report.subscription.search','admin.report.subscription.search.date', 'admin.report.payment.index', 'admin.report.payment.detail');
            ?>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isReportsActive ? 'active' :''); ?>" data-bs-toggle="collapse" href="#collapseRecords"
                    role="button" aria-expanded="true" aria-controls="collapseRecords">
                    <span><i class="las la-bars"></i></span>
                    <p><?php echo e(translate('Activity Records')); ?>  <?php if($pending_manual_payment_count > 0): ?> <i class="las la-exclamation sidebar-batch-icon"></i>  <?php endif; ?><small><i class="las la-angle-down"></i></small>
                    </p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e($isReportsActive ? 'show' :''); ?>"  id="collapseRecords">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.report.transaction.index','admin.report.transaction.search'])); ?>" href="<?php echo e(route('admin.report.transaction.index')); ?>">
                                <p><?php echo e(translate('Transaction History')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.report.subscription.index','admin.report.subscription.search','admin.report.subscription.search.date'])); ?>" href="<?php echo e(route('admin.report.subscription.index')); ?>">
                                <p><?php echo e(translate('Subscription History')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.report.payment.index', 'admin.report.payment.detail'])); ?>" href="<?php echo e(route('admin.report.payment.index')); ?>">
                                <p><?php echo e(translate('Payment History')); ?> </p>
                                <?php if($pending_manual_payment_count > 0): ?>
                                    <span class="badge bg-danger"> <?php echo e($pending_manual_payment_count); ?></span>
                                <?php endif; ?>

                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Settings & Administrator')); ?>"><?php echo e(translate('Settings & Administrator')); ?></li>
            
            <?php 
                $isSettingsActive = request()->routeIs('admin.language.*', 'admin.general.setting.*')
            ?>
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e($isSettingsActive ? 'active' : ''); ?>" data-bs-toggle="collapse" href="#collapseSetting"
                    role="button" aria-expanded="true" aria-controls="collapseSetting">
                    <span><i class="las la-tools"></i></span>
                    <p><?php echo e(translate('System Configuration')); ?>  <small><i class="las la-angle-down"></i></small>
                    </p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e($isSettingsActive ? 'show' :''); ?>"  id="collapseSetting">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.index')); ?>" href="<?php echo e(route('admin.general.setting.index')); ?>">

                                <p><?php echo e(translate('Setting')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.webhook.config')); ?>" href="<?php echo e(route('admin.general.setting.webhook.config')); ?>">

                                <p><?php echo e(translate('Webhook Configuration')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.recaptcha')); ?>" href="<?php echo e(route('admin.general.setting.recaptcha')); ?>">

                                <p><?php echo e(translate('reCaptcha')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.social.login')); ?>" href="<?php echo e(route('admin.general.setting.social.login')); ?>">

                                <p><?php echo e(translate('Google Login')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.beefree.plugin')); ?>" href="<?php echo e(route('admin.general.setting.beefree.plugin')); ?>">

                                <p><?php echo e(translate('Bee Plugin')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.currency.index')); ?>" href="<?php echo e(route('admin.general.setting.currency.index')); ?>">

                                <p><?php echo e(translate('Currencies')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.frontend.section')); ?>" href="<?php echo e(route('admin.general.setting.frontend.section')); ?>">
                                <p><?php echo e(translate('Login Section')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.language.*'])); ?>" href="<?php echo e(route('admin.language.index')); ?>">
                                <p><?php echo e(translate('Language Management')); ?></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Frontend Customization')); ?>"><?php echo e(translate('Frontend Customization')); ?></li>
            
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e(request()->routeIs('admin.frontend.sections.*') ? 'active' : ''); ?>" data-bs-toggle="collapse" href="#collapseFrontend"
                    role="button" aria-expanded="true" aria-controls="collapseFrontend">
                    <span><i class="las la-globe-americas"></i></span>
                    <p><?php echo e(translate('Frontend Sections')); ?> <small><i class="las la-angle-down"></i></small></p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e(request()->routeIs('admin.frontend.sections.*') ? 'show' : ''); ?> "  id="collapseFrontend">
                    <ul class="sub-menu">
                        <?php
                            $lastElement = collect(request()->segments())->last();
                        ?>
                            <?php $__currentLoopData = getFrontendSection(true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li class="sub-menu-item">
                                <a class="sidebar-menu-link <?php if($lastElement == $key): ?> active <?php endif; ?>" href="<?php echo e(route('admin.frontend.sections.index',$key)); ?>">
                                    <p><?php echo e(__(\Illuminate\Support\Arr::get($section, 'name',''))); ?></p>
                                </a>
                            </li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </li>
            
            <li class="sidebar-menu-title" data-text="<?php echo e(translate('Support & Compliance')); ?>"><?php echo e(translate('Support & Compliance')); ?></li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.spam.word.index')); ?>" href="<?php echo e(route('admin.spam.word.index')); ?>">
                    <span><i class="las la-file-word"></i></span>
                    <p><?php echo e(translate('Spam Word Filtering')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link collapsed <?php echo e(request()->routeIs('admin.support.ticket.*') ? 'active' : ''); ?> " data-bs-toggle="collapse" href="#collapseTicket"
                    role="button" aria-expanded="true" aria-controls="collapseTicket">
                    <span><i class="las la-ticket-alt"></i></span>
                    <p><?php echo e(translate('Support Tickets')); ?>

                        <?php if($running_support_ticket_count > 0 || $replied_support_ticket_count > 0): ?>
                            <i class="las la-exclamation sidebar-batch-icon"></i>
                        <?php endif; ?>
                     <small><i class="las la-angle-down"></i></small>
                    </p>
                </a>

                <div class="side-menu-dropdown collapse <?php echo e(request()->routeIs('admin.support.*') ? 'show' : ''); ?>"  id="collapseTicket">
                    <ul class="sub-menu">
                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive(['admin.support.ticket.index', 'admin.support.ticket.search', 'admin.support.ticket.details'])); ?>" href="<?php echo e(route('admin.support.ticket.index')); ?>">
                                <p><?php echo e(translate('All Tickets')); ?></p>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.support.ticket.running')); ?>" href="<?php echo e(route('admin.support.ticket.running')); ?>">
                                <p><?php echo e(translate('Running Tickets')); ?></p>
                                <?php if($running_support_ticket_count > 0): ?>
                                    <span class="badge bg-danger"> <?php echo e($running_support_ticket_count); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.support.ticket.answered')); ?>" href="<?php echo e(route('admin.support.ticket.answered')); ?>">
                                <p><?php echo e(translate('Answered Tickets')); ?> </p>
                                <?php if($answered_support_ticket_count > 0): ?>
                                <span class="badge bg-danger"> <?php echo e($answered_support_ticket_count); ?></span>
                            <?php endif; ?>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.support.ticket.replied')); ?>" href="<?php echo e(route('admin.support.ticket.replied')); ?>">
                                <p><?php echo e(translate('Replied Tickets')); ?></p>
                                <?php if($replied_support_ticket_count > 0): ?>
                                <span class="badge bg-danger"> <?php echo e($replied_support_ticket_count); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>

                        <li class="sub-menu-item">
                            <a class="sidebar-menu-link <?php echo e(menuActive('admin.support.ticket.closed')); ?>" href="<?php echo e(route('admin.support.ticket.closed')); ?>">
                                <p><?php echo e(translate('Closed Tickets')); ?></p>
                                <?php if($closed_support_ticket_count > 0): ?>
                                <span class="badge bg-danger"> <?php echo e($closed_support_ticket_count); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('API & Docs')); ?>"><?php echo e(translate('API & Docs')); ?></li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.generate.api.key')); ?>" href="<?php echo e(route('admin.generate.api.key')); ?>">
                    <span><i class="las la-key"></i></span>
                    <p><?php echo e(translate('API Key Generation')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('api.document')); ?>" href="<?php echo e(route('api.document')); ?>">
                    <span><i class="las la-code"></i></span>
                    <p><?php echo e(translate('API Documentation')); ?></p>
                </a>
            </li>

            <li class="sidebar-menu-title" data-text="<?php echo e(translate('System Information')); ?>"><?php echo e(translate('System Information')); ?></li>
            
            <li class="sidebar-menu-item">
                <a class="sidebar-menu-link <?php echo e(menuActive('admin.general.setting.system.info')); ?>" href="<?php echo e(route('admin.general.setting.system.info')); ?>">
                    <span><i class="las la-microchip"></i></span>
                    <p><?php echo e(translate('View System Info')); ?></p>
                </a>
            </li>
        </ul>
    </div>
</aside>

<?php $__env->startPush('script-push'); ?>
    <script>
        (function(){
            "use strict";
            // Sidebar
            const htmlRoot = document.documentElement;
            const mainContent = document.getElementById('mainContent');
            const sidebar = document.querySelector('.sidebar');
            const sidebarControlBtn = document.querySelector('.sidebar-control-btn');
            const sidebarMenuLink = document.querySelectorAll('.sidebar-menu-link');
            const menuTitle = document.querySelectorAll('.sidebar-menu-title');

            // Create Overlay Div
            const overlay = document.createElement('div');
            overlay.classList.add('overlay');

            function handleSidebarToggle() {
                const currentSidebar = htmlRoot.getAttribute('data-sidebar');
                const newAttributes = currentSidebar === 'sm' ? 'lg' : 'sm';
                htmlRoot.setAttribute('data-sidebar', newAttributes);
                mainContent.classList.toggle('added');
                for (const title of menuTitle) {
                    const dataText = title.getAttribute('data-text');
                    title.innerHTML = newAttributes === 'sm' ? '<i class="las la-ellipsis-h"></i>' : dataText;
                }

                sidebarControlBtn.style.cssText = newAttributes === 'sm' ? 'fill: var(--primary-color)' : 'color: var(--text-primary)';
            }

            function handleOverlayClick() {
                overlay.classList.remove('d-block');
                sidebar.classList.remove('active');
            }

            function handleResize() {
                const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                if (windowWidth <= 991) {
                    htmlRoot.removeAttribute('data-sidebar');
                    sidebar.parentElement.append(overlay);
                    sidebar.classList.remove('active');
                    overlay.classList.remove('d-block');
                    sidebarControlBtn.addEventListener('click', () => {
                        sidebar.classList.add('active');
                        overlay.classList.add('d-block');
                        overlay.addEventListener('click', handleOverlayClick);
                    });
                } else {
                    htmlRoot.setAttribute('data-sidebar','lg');
                    if (document.querySelector('.overlay')) {
                        document.querySelector('.overlay').remove();
                    }
                    if (sidebar.classList.contains('active')) {
                        sidebar.classList.remove('active');
                    }
                    sidebarControlBtn.addEventListener('click', handleSidebarToggle);
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize();

     // Sidebar Menu dropdown collapse
            const menuCollapse =document.querySelectorAll(".sidebar-menu .collapse")
            if (menuCollapse) {
                var collapses = menuCollapse;
                Array.from(collapses).forEach(function (collapse) {
                    // Init collapses
                    var collapseInstance = new bootstrap.Collapse(collapse, {
                        toggle: false,
                    });

  				// Hide sibling collapses on `show.bs.collapse`
				collapse.addEventListener("show.bs.collapse", function (e) {
					e.stopPropagation();
					var closestCollapse = collapse.parentElement.closest(".collapse");
					if (closestCollapse) {
						var siblingCollapses = closestCollapse.querySelectorAll(".collapse");
						Array.from(siblingCollapses).forEach(function (siblingCollapse) {
							var siblingCollapseInstance = bootstrap.Collapse.getInstance(siblingCollapse);
							if (siblingCollapseInstance === collapseInstance) {
								return;
							}
							siblingCollapseInstance.hide();
						});
					} else {
						var getSiblings = function (elem) {
							// Setup siblings array and get the first sibling
							var siblings = [];
							var sibling = elem.parentNode.firstChild;
							// Loop through each sibling and push to the array
							while (sibling) {
								if (sibling.nodeType === 1 && sibling !== elem) {
									siblings.push(sibling);
								}
								sibling = sibling.nextSibling;
							}
							return siblings;
						};
						var siblings = getSiblings(collapse.parentElement);
						Array.from(siblings).forEach(function (item) {
							if (item.childNodes.length > 2)
								item.firstElementChild.setAttribute("aria-expanded", "false");
							var ids = item.querySelectorAll("*[id]");
							Array.from(ids).forEach(function (item1) {
								item1.classList.remove("show");
								if (item1.childNodes.length > 2) {
									var val = item1.querySelectorAll("ul li a");
									Array.from(val).forEach(function (subitem) {
										if (subitem.hasAttribute("aria-expanded"))
											subitem.setAttribute("aria-expanded", "false");
									});
								}
							});
						});
					}
				});

				// Hide nested collapses on `hide.bs.collapse`
				collapse.addEventListener("hide.bs.collapse", function (e) {
					e.stopPropagation();
					var childCollapses = collapse.querySelectorAll(".collapse");
					Array.from(childCollapses).forEach(function (childCollapse) {
						childCollapseInstance = bootstrap.Collapse.getInstance(childCollapse);
						childCollapseInstance.hide();
					});
				});
                });
            }
            $('#searchMenu').keyup(function() {

			var value = $(this).val().toLowerCase();
			$('.sidebar-menu li').each(function() {

				var local = $(this).text().toLowerCase();

                if(local.indexOf(value)>-1) {

                    $(this).show();
                } else {

                    $(this).hide();
                }
			});
		});
        })();
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\xsender\src\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>