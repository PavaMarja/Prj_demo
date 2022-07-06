<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            <?php echo e(trans('panel.site_title')); ?>

        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route("admin.home")); ?>" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                <?php echo e(trans('global.dashboard')); ?>

            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/permissions*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/roles*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/users*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.permissions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.permission.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.roles.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.role.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.users.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.user.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic_c_r_m_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/crm-statuses*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-customers*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-notes*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/crm-documents*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.basicCRM.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_status_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-statuses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmStatus.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_customer_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-customers.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmCustomer.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_note_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-notes.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-sticky-note c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmNote.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crm_document_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.crm-documents.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.crmDocument.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client_management_setting_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/currencies*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/transaction-types*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/income-sources*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/client-statuses*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/project-statuses*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cog c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.clientManagementSetting.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currency_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.currencies.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/currencies") || request()->is("admin/currencies/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-money-bill c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.currency.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_type_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.transaction-types.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/transaction-types") || request()->is("admin/transaction-types/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-money-check c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.transactionType.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_source_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.income-sources.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/income-sources") || request()->is("admin/income-sources/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-database c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.incomeSource.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client_status_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.client-statuses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/client-statuses") || request()->is("admin/client-statuses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.clientStatus.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_status_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.project-statuses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/project-statuses") || request()->is("admin/project-statuses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.projectStatus.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/clients*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/projects*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/notes*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/documents*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/transactions*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/client-reports*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.clientManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.clients.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.client.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.projects.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/projects") || request()->is("admin/projects/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.project.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('note_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.notes.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/notes") || request()->is("admin/notes/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-sticky-note c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.note.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('document_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.documents.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/documents") || request()->is("admin/documents/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.document.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('transaction_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.transactions.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/transactions") || request()->is("admin/transactions/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-credit-card c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.transaction.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client_report_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.client-reports.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/client-reports") || request()->is("admin/client-reports/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-chart-line c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.clientReport.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/expense-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/income-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/expenses*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/incomes*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/expense-reports*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-money-bill c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.expenseManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expense-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expense-categories") || request()->is("admin/expense-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expenseCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.income-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/income-categories") || request()->is("admin/income-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.incomeCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expenses.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expenses") || request()->is("admin/expenses/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-arrow-circle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expense.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('income_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.incomes.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/incomes") || request()->is("admin/incomes/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-arrow-circle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.income.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_report_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.expense-reports.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/expense-reports") || request()->is("admin/expense-reports/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-chart-line c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.expenseReport.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/content-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/content-tags*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/content-pages*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.contentManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-categories") || request()->is("admin/content-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_tag_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-tags.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-tags") || request()->is("admin/content-tags/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentTag.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('content_page_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.content-pages.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/content-pages") || request()->is("admin/content-pages/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-file c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.contentPage.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_management_access')): ?>
            <li class="c-sidebar-nav-dropdown <?php echo e(request()->is("admin/product-categories*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/product-tags*") ? "c-show" : ""); ?> <?php echo e(request()->is("admin/products*") ? "c-show" : ""); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.productManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.product-categories.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.productCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_tag_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.product-tags.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-folder c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.productTag.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route("admin.products.index")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : ""); ?>">
                                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.product.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route("admin.systemCalendar")); ?>" class="c-sidebar-nav-link <?php echo e(request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "c-active" : ""); ?>">
                <i class="c-sidebar-nav-icon fa-fw fas fa-calendar">

                </i>
                <?php echo e(trans('global.systemCalendar')); ?>

            </a>
        </li>
        <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : ''); ?>" href="<?php echo e(route('profile.password.edit')); ?>">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        <?php echo e(trans('global.change_password')); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                <?php echo e(trans('global.logout')); ?>

            </a>
        </li>
    </ul>

</div><?php /**PATH /home/pmarjano/public_html/osobniportal/resources/views/partials/menu.blade.php ENDPATH**/ ?>