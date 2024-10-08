<header class="header">
    <div class="header_sub_content">
        <div class="topbar-left">
            <div class="sidebar-controller">
                <button class="sidebar-control-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M2 5a1 1 0 0 1 1-1h13a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm19 6H3a1 1 0 1 0 0 2h18a1 1 0 1 0 0-2zm-9 7H3a1 1 0 1 0 0 2h9a1 1 0 1 0 0-2z" data-original="#000000" class=""></path></g></svg>
                </button>
            </div>
        </div>

        <div class="topbar-right">
            <div class="profile_notification">
               
                <div class="d-lg-flex align-items-center gap-4 me-2 d-none">
                    <div class="header-menu">
                        <i class="las la-plus"></i>
                        <div class="header-dropdown">
                            <ul>
                                <li><a href="<?php echo e(route('admin.sms.create')); ?>"> <i class="las la-sms"></i><?php echo e(translate('Send SMS')); ?></a></li>
                                <li><a href="<?php echo e(route('admin.whatsapp.create')); ?>"> <i class="lab la-whatsapp"></i><?php echo e(translate('Send WhatsApp')); ?></a></li>
                                <li><a href="<?php echo e(route('admin.email.send')); ?>"> <i class="las la-envelope"></i> <?php echo e(translate('Send Email')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                
                    <a href="<?php echo e(route('admin.report.transaction.index')); ?>" title="<?php echo e(translate('Transactions & Reports')); ?>" class="header-menu"><i class="las la-file-alt"></i></a>

                    
                    
                    <div class="header-menu">
                        <i class="las la-cog"></i> 
                        <span>
                            <i class="las la-angle-down"></i>
                        </span>
                        <div class="header-dropdown">
                            <ul>
                                <li><a href="<?php echo e(route('admin.sms.gateway.sms.api')); ?>"> <i class="lab la-google"></i><?php echo e(translate('SMS Setting')); ?></a></li>
                                <li><a href="<?php echo e(route('admin.general.setting.beefree.plugin')); ?>"> <i class="las la-stream"></i> <?php echo e(translate('Bee Plugin')); ?></a></li>
                                <li><a href="<?php echo e(route('admin.general.setting.currency.index')); ?>"> <i class="las la-coins"></i> <?php echo e(translate('Currencies')); ?></a></li>
                                <li><a href="<?php echo e(route('admin.general.setting.index')); ?>"> <i class="las la-user-cog"></i> <?php echo e(translate('Setting')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                
                </div>
            
                <a href="<?php echo e(route('admin.general.setting.cache.clear')); ?>" class="header-icon-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 515.554 515.554" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M96.666 257.778c0-77.635 55.647-141.267 128.889-156.322v27.433l96.667-64.444L225.555 0v34.968C116.447 50.684 32.221 144.4 32.221 257.778c0 68.268 30.612 129.428 78.693 170.827l56.424-37.619c-42.608-29.023-70.672-77.885-70.672-133.208zM404.639 86.951l-56.424 37.619c42.608 29.022 70.673 77.885 70.673 133.208 0 77.731-55.535 142.223-128.891 157.26v-28.373l-96.667 64.444 96.667 64.444v-34.838c109.12-15.72 193.335-109.55 193.335-222.938.001-68.267-30.611-129.427-78.693-170.826z" data-original="#000000" class=""></path></g></svg>
                </a>
                <a href="<?php echo e(url('/')); ?>" target="_blank" class="header-icon-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 46.002 46.002" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="m40.503 16.351.4.287h.373v-.718l1.176-.114 1.117.832h1.836l.129-.118a23.415 23.415 0 0 0-.623-1.823l-1.198.02-.601-.66-.116-1.061-.616.336-.33 1.297-.889-.946-.036-.894-.858-.739-.316-.315h-.995l.313.887 1.198.668.208.221-.26.13.012.703-.584.244-.498-.109-.312-.441.811.043.219-.295-1.795-1.211-.138-.516-.729.66-.739-.152-1.125 1.463-.222.573-.72.065-1.065.007-.637-.298-.188-1.265.229-.603 1.084-.237 1.182.237.145-.654-.502-.119.171-1.019 1.19-.186.832-1.175.859-.144.775.115h.286l-.158-1.104-.942.38-.332-.825-.547-.076-.103-.565.446-.486 1.061-.416.273-.488C34.599 2.175 29.284 0 23.468 0A22.87 22.87 0 0 0 9.955 4.405l1.16-.009.517.286.974.21.076.383 1.549.057-.21-.497-1.376-.039.324-.305-.113-.364h-1.244l1.357-1.013h1.3l.611.842 1.014.057.611-.593.459.229-.842.822s-1.165.021-1.108.021c.057 0 .096.802.096.802l1.413-.039.153-.381.974-.058.115-.573-.573-.097.191-.516.439-.133 1.529.076-.843.765.136.592.879.134-.057-1.07.841-.44 1.491-.172 2.159.956v.822l.688.172-.345.65h-.975l-.289.745-2.225-.525 1.751-.933-.667-.567-1.51.191-.132.137-.005-.002-.023.032-.435.452-.719.059.057.358.251.104-.01.118-.585.083-.043.339-.559.029-.101-.674-1.003.305-2.05 1.2.23.845.573.374 1.146.158v1.303l.53-.085.488-1.018 1.219-.386V7.061l.678-.512 1.639.387-.115 1.033h.44l1.205-.592.058 1.356.877.535-.037.804-.84.286.057.266 1.013.461-.021.554-.293.025a.08.08 0 0 0-.003-.015l-1.278-.394-.054-.41h-.001l.374-.257v-.374l-.402-.101-.1.345-.705.109-.07-.023v.035l-.244.037-.199-.402-.23-.101h-.502l-.228.188v.416l.429.143.424.06-.095.042-.387.429-.17-.214-.374-.099-1.019.958.133.109-1.504.833-1.415 1.472-.097.655-1.418.932-.703.707.078 1.414-.975-.454.007-.827-2.713.001-1.405.711-.61 1.125-.242.892.395.865 1.107.135 1.759-1.176.154.583-.537 1.014 1.339.229.134 2.068 1.835.312 1.166-1.348 1.415.288.497.691 1.357-.08.038-.401.746.362.841 1.318 1.452.02.536.938.076 1.146 1.606.611 2.026.021.593.973.898.288-.172.805-.984 1.25-.287 2.769-.889.702-1.318-.039-.439.764.326 1.436-1.435 1.834-.458.842-1.367.656-.899.137-.037.381.631.181-.076.411-.565.544.343.433.68.019-.038.524-.181.517-.058.42 1.006.847-.134.44-1.369-.026-1.362-1.188-1.061-1.865.148-1.8-.803-1.071.325-1.815-.477-.133V32.5s-1.338-1.014-1.415-1.014c-.077 0-.708-.172-.708-.172l-.134-.744-1.739-2.18.172-.783.057-1.281 1.204-.842-.172-1.434-1.758-.132-1.376-1.568-.975-.27-.63-.116.076-.573-.803-.114v.325l-2.008-.501-.808-1.236.329-.599-1.271-1.855-.218-1.357h-.516l.171 1.318.879 1.357-.096.536-.745-.115-.917-1.563v-1.819l-.956-.459V14a22.884 22.884 0 0 0-1.835 9.001c0 12.683 10.318 23.001 23.001 23.001 7.19 0 13.618-3.318 17.839-8.502h-.759v-1.529l-.878-1.182V32.95l-.67-.668-.059-.765.852-1.625-1.613-2.849.189-1.933-1.452-.15-.535-.535h-.976l-.496.458H33.19l-.058.153h-.957l-2.196-2.503.018-1.95.363-.133.135-.746h-.516l-.211-.783 2.541-1.834v-1.3l1.244-.691.504.05h1.023l.801-.43 2.581-.201v1.319l2.041.517zM34.051 8.15l.21-.324.756-.153.189.918.402.649.267.307.487.19-.459.546-.889.085h-.668l.075-.793.556-.115-.047-.373-.518-.325-.362-.248.001-.364zM32.81 9.584l.459-.736.619-.144.44.191-.04.497-.946.669h-.534v-.477h.002zm-12.497 2.829-.479.04.026-.333.214-.267.288.226-.049.334zm1.679-.588-.327.028-.066.316-.252.157-.404.034c-.014-.095-.022-.167-.022-.167h-.157v-.34h.659l.136-.351.262-.005.299.062-.128.266z"  data-original="#000000" class=""></path></g></svg>
                </a>
                <ul>
                    <li class="dropdown-language drop-down">
                        <a class="dropdown-toggle hide-arrow header-icon-btn" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="flag-icon flag-icon-<?php echo e(session('flag')); ?> flag-icon-squared rounded-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <div class="drop-menu">
                                <span><?php echo e(translate('Select Language')); ?></span>
                                <a href="<?php echo e(route('admin.language.index')); ?>">
                                    <i class="las la-cog me-1"></i>
                                </a>
                            </div>
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="dropdown-item <?php if(session('lang') == $language->code): ?> selected  <?php endif; ?>" href="javascript:void(0);" data-language="<?php echo e($language->code); ?>" onclick="changeLang('<?php echo e($language->id); ?>')">
                                    <i class="flag-icon flag-icon-<?php echo e($language->flag); ?> flag-icon-squared rounded-circle fs-4 me-1"></i>
                                    <span class="align-middle"><?php echo e($language->name); ?></span>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>

                    <li class="profile-dropdown drop-down">
                        <div class="pointer dropdown-toggle d--flex align--center" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="profile-nav-img"><img src="<?php echo e(showImage(filePath()['profile']['admin']['path'].'/'.auth()->guard('admin')->user()->image)); ?>" alt="Image"></span>
                            <p class="ms-1 hide_small admin--profile--notification"><?php echo e(auth()->guard('admin')->user()->name); ?></p>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>"><i class="me-1 las la-cog"></i> <?php echo e(translate('Profile Setting')); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('admin.password')); ?>"><i class="me-1 las la-lock"></i> <?php echo e(translate('Password Update')); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><i class="me-1 las la-sign-in-alt"></i> <?php echo e(translate('Logout')); ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
               
            </div>
        </div>
    </div>
</header>


<?php $__env->startPush('script-push'); ?>
<script>
    (function () {
        "use strict";
        window.addEventListener("DOMContentLoaded", () => {
            const header = document.querySelector('.header');
            window.addEventListener("scroll", () => {
                if (header && document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
                    header.classList.add('header-sticky');
                }
                else {
                    header.classList.remove('header-sticky');
                }
            })
        })
    }())
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\xsender\src\resources\views/admin/partials/topbar.blade.php ENDPATH**/ ?>