
<?php $__env->startSection('panel'); ?>
<?php $__env->startPush('style-push'); ?>
<style> 
    .tablinks {
        background-color: #f1f1f1;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: background-color 0.3s;
    }
     
    .tablinks:hover {
        background-color: var(--secondary-color);
        color: var(--white);
    }
     
    .tablinks.active {
        background-color: var(--primary-color);
        color: var(--white);
    }
     
    .tab-content {
        display: none;
        padding: 20px;
        border: 1px solid var(--border);
        border-radius: 0px 5px 5px 5px;
    }
     
    .active-tab {
        display: block;
    }
</style>
<?php $__env->stopPush(); ?>
<section>
    <div class="container-fluid p-0">
        <div class="row gy-4">

            <div class="col">
                <div class="tab">
                    <button class="tablinks" onclick="openWpTab(event, 'wp-cloud-api')"><?php echo e(translate("Cloud API")); ?></button>
                    <button class="tablinks" onclick="openWpTab(event, 'wp-node-server')"><?php echo e(translate("Node Server")); ?></button>
                </div>

                <div id="wp-cloud-api" class="tab-content">
                    <div class="form-item">
                        <div>
                            <form action="<?php echo e(route('admin.gateway.whatsapp.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <input type="text" name="whatsapp_business_api" value="true" hidden>

                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h6><?php echo e(translate('WhatsApp Cloud API')); ?></h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <label for="name"><?php echo e(translate('Business Portfolio Name')); ?> <span class="text-danger">*</span></label>
                                                <input type="text" class="mt-2 form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(translate('Add a name for your Business Portfolio')); ?>" autocomplete="true">
                                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <?php $__currentLoopData = $credentials["required"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creds_key => $creds_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="<?php echo e($loop->last ? 'col-12' : 'col-md-6'); ?> mb-4">
                                                    <label for="<?php echo e($creds_key); ?>"><?php echo e(translate(textFormat(['_'], $creds_key))); ?> <span class="text-danger">*</span></label>
                                                    <input type="text" id="<?php echo e($creds_key); ?>" class="mt-2 form-control" name="credentials[<?php echo e($creds_key); ?>]" value="<?php echo e(old($creds_key)); ?>" placeholder="Enter the <?php echo e(translate(textFormat(['_'], $creds_key))); ?>">
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <sup class="mb-3"><?php echo e(translate("Now to set up your webhook please click here to collect credentials: ")); ?><a class="fw-bold text-dark text-decoration-underline " target="_blank" href="<?php echo e(route('admin.general.setting.webhook.config')); ?>"><?php echo e(translate("Webhook Configuration")); ?> <i class="fa-solid fa-arrow-up-right-from-square"></i></a></sup>
                                        </div>
                                        <button type="submit" class="i-btn primary--btn btn--md"><?php echo e(translate('Submit')); ?></button>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-title">
                                        <?php echo e(translate('WhatsApp Business Account List')); ?>

                                    </h6>

                                </div>
                                <div class="card-body px-0">
                                    <div class="responsive-table">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th><?php echo e(translate('Session Name')); ?></th>
                                                <th><?php echo e(translate('Templates')); ?></th>
                                                <th><?php echo e(translate('Action')); ?></th>
                                            </tr>
                                            </thead>
                                            <?php $__empty_1 = true; $__currentLoopData = $whatsappBusinesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td data-label="<?php echo e(translate('Session Name')); ?>"><?php echo e($item->name); ?></td>
                                                        <td data-label="<?php echo e(translate('Templates')); ?>">
                                                            <a href="<?php echo e(route('admin.template.index', ['type' => 'whatsapp', 'id' => $item->id])); ?>" class="badge badge--primary p-2"> <?php echo e(translate('view templates ')); ?> (<?php echo e(count($item->template)); ?>)</a>
                                                        </td>
                                                        <td data-label="<?php echo e(translate('Action')); ?>">
                                                            <div class="d-flex align-items-center justify-content-md-start justify-content-end gap-3">
                                                                <a title="Edit" href="javascript:void(0)" class="i-btn primary--btn btn--sm whatsappBusinessApiEdit"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#whatsappBusinessApiEdit"
                                                                data-id="<?php echo e($item->id); ?>"
                                                                data-name="<?php echo e($item->name); ?>"
                                                                data-credentials="<?php echo e(json_encode($item->credentials)); ?>"><i class="las la-pen"></i><?php echo e(translate('Edit')); ?></a>

                                                                <a title="Sync Templates" href="" class="i-btn success--btn btn--sm sync" value="<?php echo e($item->id); ?>"><i class="fa-solid fa-rotate"></i><?php echo e(translate('Sync Templates')); ?></a>
                                                                <a title="Delete" href="" class="i-btn danger--btn btn--sm whatsappDelete" value="<?php echo e($item->id); ?>"><i class="fas fa-trash-alt"></i><?php echo e(translate('Trash')); ?></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5" class="text-center py-4"><span class="text-danger fw-medium"><?php echo e(translate('No data Available')); ?></span></td>
                                                    </tr>
                                                </tbody>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                    <div class="m-3">
                                        <?php echo e($whatsappBusinesses->appends(request()->all())->onEachSide(1)->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="wp-node-server" class="tab-content">
                    <div class="form-item">
                        <?php if($checkWhatsAppServer): ?>
                            <div>
                                <form action="<?php echo e(route('admin.gateway.whatsapp.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="whatsapp_node_module" value="true" hidden>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h6><?php echo e(translate('WhatsApp Node Server')); ?></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <label for="name"><?php echo e(translate('Session/Device Name')); ?> <span  class="text-danger">*</span>  </label>
                                                    <input type="text" class="mt-2 form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(translate('Put Session Name (Any)')); ?>" autocomplete="true">
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="min_delay"><?php echo e(translate('Message Minimum Delay Time')); ?>

                                                        <span class="text-danger" >*</span>
                                                    </label>
                                                    <input type="number" class="mt-2 form-control" name="min_delay" id="min_delay" value="<?php echo e(old('min_delay')); ?>" placeholder="<?php echo e(translate('Message minimum delay time in seconds')); ?>">
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <label for="max_delay"><?php echo e(translate('Message Maximum Delay Time')); ?>

                                                        <span class="text-danger" >*</span>
                                                    </label>
                                                    <input type="number" class="mt-2 form-control" name="max_delay" id="max_delay" value="<?php echo e(old('max_delay')); ?>" placeholder="<?php echo e(translate('Message maximum delay time in second')); ?>">
                                                </div>
                                            </div>
                                            <button type="submit" class="i-btn primary--btn btn--md"><?php echo e(translate('Submit')); ?></button>
                                        </div>
                                    </div>
                                </form>

                                <div class="card">
                                    <div class="card-header">
                                            <h6><?php echo e(translate('WhatsApp Linked Device List')); ?></h6>
                                        <div class="d-flex align-items-center flex-wrap gap-3">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#whatsappServerSetting" class="badge badge--info"><i class="fas fa-gear"></i> <?php echo e(translate('Server Settings')); ?></a>
                                        </div>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="responsive-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th><?php echo e(translate('Session Name')); ?></th>
                                                    <th><?php echo e(translate('WhatsApp Number')); ?></th>
                                                    <th><?php echo e(translate('Minimum Delay')); ?></th>
                                                    <th><?php echo e(translate('Maximum Delay')); ?></th>
                                                    <th><?php echo e(translate('Status')); ?></th>
                                                    <th><?php echo e(translate('Action')); ?></th>
                                                </tr>
                                                </thead>
                                                <?php $__empty_1 = true; $__currentLoopData = $whatsappNodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                                    <tbody>
                                                    <tr>
                                                        <td data-label="<?php echo e(translate('Session Name')); ?>"><?php echo e($item->name); ?></td>
                                                        <td data-label="<?php echo e(translate('WhatsApp Number')); ?>" ><?php echo e(array_key_exists("number", $item->credentials) && $item->credentials["number"] != " "? $item->credentials["number"] : 'N/A'); ?></td>
                                                        <td data-label="<?php echo e(translate('Time Delay')); ?>" ><?php echo e(array_key_exists("min_delay", $item->credentials) ? convertTime($item->credentials["min_delay"]) : "N/A"); ?></td>
                                                        <td data-label="<?php echo e(translate('Time Delay')); ?>" ><?php echo e(array_key_exists("max_delay", $item->credentials) ? convertTime($item->credentials["max_delay"]) : "N/A"); ?></td>
                                                        <td data-label="<?php echo e(translate('Status')); ?>" >
                                                            <div class="d-flex align-items-center justify-content-md-start justify-content-end gap-3">
                                                                <span class="badge badge--<?php echo e($item->status == 'initiate' ? 'primary' : ($item->status == 'connected' ? 'success' : 'danger')); ?>">
                                                                    <?php echo e(ucwords($item->status)); ?>

                                                                </span>
                                                            </div>

                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-md-start justify-content-end gap-3">

                                                                <a title="Edit" href="javascript:void(0)" class="i-btn primary--btn btn--sm whatsappEdit"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#whatsappEdit"
                                                                data-id="<?php echo e($item->id); ?>"
                                                                data-name="<?php echo e($item->name); ?>"
                                                                data-min_delay="<?php echo e($item->credentials['min_delay']); ?>"
                                                                data-max_delay="<?php echo e($item->credentials['max_delay']); ?>"><i class="las la-pen"></i><?php echo e(translate('Edit')); ?></a>
                                                                <?php if($item->status == 'initiate'): ?>
                                                                <a title="Scan" href="javascript:void(0)" id="textChange" class="i-btn success--btn btn--sm qrQuote textChange<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><i class="fas fa-qrcode"></i><?php echo e(translate('Scan')); ?></a>
                                                                <?php elseif($item->status == 'connected'): ?>
                                                                    <a title="Disconnect" href="javascript:void(0)" onclick="return deviceStatusUpdate('<?php echo e($item->id); ?>','disconnected','deviceDisconnection','Disconnecting','Connect')" class="i-btn warning--btn btn--sm deviceDisconnection<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><i class="fas fa-plug"></i><?php echo e(translate('Disconnect')); ?></a>
                                                                <?php else: ?>
                                                                    <a title="Scan" href="javascript:void(0)" id="textChange" class="i-btn success--btn btn--sm qrQuote textChange<?php echo e($item->id); ?>" value="<?php echo e($item->id); ?>"><i class="fas fa-qrcode"></i><?php echo e(translate('Scan')); ?></a>
                                                                <?php endif; ?>

                                                                <a title="Delete" href="" class="i-btn danger--btn btn--sm whatsappDelete" value="<?php echo e($item->id); ?>"><i class="fas fa-trash-alt"></i><?php echo e(translate('Trash')); ?></a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="50"><span class="text-danger"><?php echo e(translate('No data Available')); ?></span></td>
                                                    </tr>
                                                    </tbody>
                                                <?php endif; ?>
                                            </table>
                                        </div>
                                        <div class="m-3">
                                            <?php echo e($whatsappNodes->appends(request()->all())->onEachSide(1)->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="qrQuoteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="staticBackdropLabel"><?php echo e(translate('Scan Device')); ?></h6>
                                            <button type="button" class="btn-close" aria-label="Close" onclick="return deviceStatusUpdate('','initiate','','','')"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="scan_id" id="scan_id" value="">
                                            <div>
                                                <h6 class="py-3"><?php echo e(translate('To use WhatsApp')); ?></h6>
                                                <ul>
                                                    <li><?php echo e(translate('1. Open WhatsApp on your phone')); ?></li>
                                                    <li><?php echo e(translate('2. Tap Menu  or Settings  and select Linked Devices')); ?></li>
                                                    <li><?php echo e(translate('3. Point your phone to this screen to capture the code')); ?></li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <img id="qrcode" class="w-50" src="" alt="">
                                            </div>
                                            <div class="text-center">
                                                <small><a href="https://faq.whatsapp.com/1317564962315842/?cms_platform=web&lang=en" target="_blank"><i class="fas fa-info"></i><?php echo e(translate('More Guide')); ?></a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card">
                                <div class="card-header">
                                   <span><?php echo e(translate('Node Server Offline')); ?> <i class="fas fa-info-circle"></i></span>

                                    <div class="header-with-btn">
                                        <span class="d-flex align-items-center gap-2"> 
                                            <a href="" class="badge badge--primary"> <i class="fas fa-refresh"></i>  <?php echo e(translate('Try Again')); ?></a>
                                            <a href="https://support.igensolutionsltd.com/help-center/categories/2/xsender" target="_blank" class="badge badge--success">  <i class="fas fa-gear"></i> <?php echo e(translate('Setup Guide')); ?></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#whatsappServerSetting" class="badge badge--info"><i class="las la-key"></i> <?php echo e(translate('Node Settings')); ?></a>
                                        </span>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h6 class="text--danger"><?php echo e(translate('Unable to connect to WhatsApp node server. Please configure the server settings and try again.')); ?></h6>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="whatsappDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('admin.gateway.whatsapp.delete')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="">
                <div class="modal_body2">
                    <div class="modal_icon2">
                        <i class="las la-trash"></i>
                    </div>
                    <div class="modal_text2 mt-3">
                        <h6><?php echo e(translate('Are you sure to delete')); ?></h6>
                    </div>
                </div>
                <div class="modal_button2 modal-footer">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <button type="button" class="i-btn primary--btn btn--md" data-bs-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                        <button type="submit" class="i-btn danger--btn btn--md"><?php echo e(translate('Delete')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="whatsappBusinessApiEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><?php echo e(translate('Update WhatsApp Business API')); ?></h6>
                 <button type="button" class="i-btn bg--lite--danger text--danger btn--sm" data-bs-dismiss="modal"> <i class="las la-times"></i></button>
            </div>
            <form action="<?php echo e(route('admin.gateway.whatsapp.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="whatsapp_business_api" value="true" hidden>
                <input type="hidden" name="id">
                <div class="modal-body">
                        <div class="row gx-4 gy-3">

                            <div class="col-lg-12">
                                <label for="name" class="form-label"><?php echo e(translate('Business API Name')); ?> <sup class="text--danger">*</sup></label>
                                <div class="input-group">
                                      <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(translate('Update Name')); ?>" autocomplete="true">
                                </div>
                            </div>
                            <div id="edit_cred">

                            </div>
                            
                        </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex align-items-center gap-3">
                        <button type="button" class="i-btn danger--btn btn--md" data-bs-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                        <button type="submit" class="i-btn primary--btn btn--md"><?php echo e(translate('Submit')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="whatsappEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><?php echo e(translate('Update WhatsApp Gateway')); ?></h6>
                 <button type="button" class="i-btn bg--lite--danger text--danger btn--sm" data-bs-dismiss="modal"> <i class="las la-times"></i></button>
            </div>
            <form action="<?php echo e(route('admin.gateway.whatsapp.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="text" name="whatsapp_node_module" value="true" hidden>
                <input type="hidden" name="id">
                <div class="modal-body">
                        <div class="row gx-4 gy-3">

                            <div class="col-lg-12">
                                <label for="min_delay" class="form-label"><?php echo e(translate('Minimum Delay Time')); ?> <sup class="text--danger">*</sup></label>
                                <div class="input-group">
                                      <input type="text" class="form-control" id="min_delay" name="min_delay" placeholder="<?php echo e(translate('Enter Minimum Delay Time')); ?>">
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <label for="max_delay" class="form-label"><?php echo e(translate('Maximum Delay Time')); ?> <sup class="text--danger">*</sup></label>
                                <div class="input-group">
                                      <input type="text" class="form-control" id="max_delay" name="max_delay" placeholder="<?php echo e(translate('Enter maximum Delay Time')); ?>">
                                </div>

                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex align-items-center gap-3">
                        <button type="button" class="i-btn danger--btn btn--md" data-bs-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                        <button type="submit" class="i-btn primary--btn btn--md"><?php echo e(translate('Submit')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

 
<div class="modal fade" id="whatsappServerSetting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?php echo e(route('admin.gateway.whatsapp.server.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header bg--lite--violet">
                            <div class="card-title "><?php echo e(translate('WhatsApp Node Server Settings')); ?></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="server_url" class="form-label"><?php echo e(translate('WhatsApp Server URL')); ?></label>
                                <input type="text" class="form-control" id="server_url" placeholder="<?php echo e(translate('Enter Whatsapp Server URL')); ?>" value="<?php echo e(env('WP_SERVER_URL')); ?>" readonly="true">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="server_host" class="form-label"><?php echo e(translate('WhatsApp Server Host')); ?> <sup class="text--danger">*</sup></label>
                                <input type="text" class="form-control" id="server_host" name="server_host" placeholder="<?php echo e(translate('Enter Whatsapp Server Host')); ?>" value="<?php echo e(env('NODE_SERVER_HOST')); ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="server_port" class="form-label"><?php echo e(translate('WhatsApp Server Port')); ?> <sup class="text--danger">*</sup></label>
                                <input type="number" class="form-control" id="server_port" name="server_port" placeholder="<?php echo e(translate('Enter Whatsapp Server Port')); ?>" value="<?php echo e(env('NODE_SERVER_PORT')); ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="max_retries" class="form-label"><?php echo e(translate('Maximum Retries')); ?> <sup class="text--danger">*</sup></label>
                                <input type="number" class="form-control" id="max_retries" name="max_retries" placeholder="<?php echo e(translate('Enter The Maximum Amount of Retries')); ?>" value="<?php echo e(env('MAX_RETRIES')); ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="reconnect_interval" class="form-label"><?php echo e(translate('Reconnect Interval')); ?> <sup class="text--danger">*</sup></label>
                                <input type="number" class="form-control" id="reconnect_interval" name="reconnect_interval" placeholder="<?php echo e(translate('Enter Reconnect Interval Duration')); ?>" value="<?php echo e(env('RECONNECT_INTERVAL')); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal_button2 modal-footer">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <button type="button" class="i-btn primary--btn btn--md" data-bs-dismiss="modal"><?php echo e(translate('Cancel')); ?></button>
                        <button type="submit" class="i-btn success--btn btn--md"><?php echo e(translate('Submit')); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-push'); ?>
<script>
	(function($){
		"use strict";

        // qrQuote scan
        $(document).on('click', '.qrQuote', function(e){
            e.preventDefault()
            var id = $(this).attr('value')
            var url = "<?php echo e(route('admin.gateway.whatsapp.qrcode')); ?>"
            $.ajax({
                headers: {'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"},
                url:url,
                data: {id:id},
                dataType: 'json',
                method: 'post',
                beforeSend: function(){
                    $('.textChange'+id).html(`<i class="fas fa-refresh"></i>&nbsp<?php echo e(translate('Loading...')); ?>`);
                },
                success: function(res){
                    $("#scan_id").val(res.response.id);
                    if (res.data.message && res.data.qr && res.data.status===200) {
                        $('#qrcode').attr('src', res.data.qr);
                        notify('success', res.data.message);
                        $('#qrQuoteModal').modal('show');
                        sleep(10000).then(() => {
                            wapSession(res.response.id);
                        });
                    } else if (res.data.message) {
                        notify('error', res.data.message);
                    }
                },
                complete: function(){
                    $('.textChange'+id).html(`<i class="fas fa-qrcode"></i>&nbsp <?php echo e(translate('Scan')); ?>`);
                },
                error: function(e) {
                    notify('error','Something went wrong')
                }
            });
        });


    })(jQuery);

    function wapSession(id) {
        $.ajax({
            headers: {'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"},
            url:"<?php echo e(route('admin.gateway.whatsapp.device.status')); ?>",
            data: {id:id},
            dataType: 'json',
            method: 'post',
            success: function(res){
                $("#scan_id").val(res.response.id);
                if (res.data.qr!=='')
                {
                    $('#qrcode').attr('src',res.data.qr);
                }

                if (res.data.status===301)
                {
                    sleep(2500).then(() => {
                        $('#qrQuoteModal').modal('hide');
                        location.reload();
                    });
                }else{
                    sleep(10000).then(() => {
                        wapSession(res.response.id);
                    });
                }
            }
        })
    }

    function deviceStatusUpdate(id,status,className='',beforeSend='',afterSend='') {
        if (id=='') {
            id = $("#scan_id").val();
        }
        $('#qrQuoteModal').modal('hide');
        $.ajax({
            headers: {'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"},
            url:"<?php echo e(route('admin.gateway.whatsapp.status-update')); ?>",
            data: {id:id,status:status},
            dataType: 'json',
            method: 'post',
            beforeSend: function(){
                if (beforeSend!='') {
                    $('.'+className+id).html(beforeSend);
                }
            },
            success: function(res){
                sleep(1000).then(()=>{
                    location.reload();
                })
            },
            complete: function(){
                if (afterSend!='') {
                    $('.'+className+id).html(afterSend);
                }
            }
        })
    }

    function textFormat(symbols, data, replaceWith) {

        symbols = symbols || null;
        replaceWith = replaceWith || ' ';

        var convertedString = data.replace(new RegExp(symbols.join('|'), 'g'), replaceWith).toLowerCase().replace(/(?:^|\s)\S/g, function(a) {
            return a.toUpperCase();
        });

        return convertedString;
    }

    $(document).ready(function() {
        $('.sync').click(function(e) {
            e.preventDefault();
            var itemId = $(this).attr('value'); 
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var a = $(this);
            a.addClass('disabled').append('<span class="loading-spinner spinner-border spinner-border-sm" aria-hidden="true"></span> ');
            $.ajax({
                url: '<?php echo e(route("admin.template.whatsapp.refresh")); ?>',
                type: 'GET', 
                data: {
                    itemId: itemId 
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken 
                },
                success: function(response) {
                    a.find('.loading-spinner').remove();
                    a.removeClass('disabled');
                    
                 
                    if(response.status && response.reload){
                        location.reload(true);
                        notify('success', "Successfully synced Templates");
                    } else {
                        notify('error', "Could Not Sync Templates");
                    }
                },
                error: function(xhr, status, error) {
                    a.find('.loading-spinner').remove();
                    notify('error', "Some error occured");
                }
            });
        });
    });

    function openWpTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        localStorage.setItem('selectedTab', tabName);
    }

    window.onload = function() {
        var selectedTab = localStorage.getItem('selectedTab');
        if (selectedTab) {
            document.getElementById(selectedTab).style.display = "block";
            var tablinks = document.getElementsByClassName("tablinks");
            for (var i = 0; i < tablinks.length; i++) { 
                if (tablinks[i].textContent.trim().toLowerCase().replace(/\s+/g, '-') === selectedTab.slice(3)) {
                    tablinks[i].classList.add("active");
                }
            }
        } else { 
            document.getElementsByClassName('tablinks')[0].click();
        }
    }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\xsender\src\resources\views/admin/whatsapp/device.blade.php ENDPATH**/ ?>