<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Buttons</h3>

                    <p class="uk-text-large">Raised</p>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn" href="#">Default</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-primary" href="#">Primary</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-warning" href="#">Warning</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-danger" href="#">Danger</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-success" href="#">Success</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn disabled" href="#">Disabled</a>
                        </div>
                    </div>

                    <p class="uk-margin-large-top uk-text-large">Flat</p>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat" href="#">Default</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat md-btn-flat-primary" href="#">Primary</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat md-btn-flat-warning" href="#">Warning</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat md-btn-flat-danger" href="#">Danger</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat md-btn-flat-success" href="#">Success</a>
                        </div>
                        <div class="uk-width-medium-1-6">
                            <a class="md-btn md-btn-flat disabled" href="#">Disabled</a>
                        </div>
                    </div>

                    <p class="uk-margin-large-top uk-text-large">Size</p>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <a class="md-btn md-btn-primary md-btn-small" href="#">Mini</a>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <a class="md-btn md-btn-primary md-btn-large" href="#">Large</a>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <a class="md-btn md-btn-primary md-btn-block" href="#">Full width</a>
                        </div>
                    </div>

                    <p class="uk-margin-large-top uk-text-large">Floating Action Buttons</p>
                    <p>Floating action buttons are used for a promoted action. They are distinguished by a circled icon floating above the UI and have motion behaviors that include morphing, launching, and a transferring anchor point.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-fab-wrapper md-fab-speed-dial">
        <a class="md-fab md-fab-primary" href="#" data-uk-tooltip="{pos:'right'}" title="Mailbox"><i class="material-icons">&#xE0BE;</i></a>
        <div class="md-fab-wrapper-small">
            <a class="md-fab md-fab-small" href="#" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'left'}" title="Download"><i class="material-icons">&#xE163;</i></a>
            <a class="md-fab md-fab-small md-fab-warning" href="#" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'left'}" title="Flag"><i class="material-icons">&#xE2C3;</i></a>
            <a class="md-fab md-fab-small md-fab-danger" href="#" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'left'}" title="Upload"><i class="material-icons">&#xE153;</i></a>
            <a class="md-fab md-fab-small md-fab-success" href="#" data-uk-tooltip="{cls:'uk-tooltip-small',pos:'left'}" title="Send"><i class="material-icons">&#xE149;</i></a>
        </div>
    </div>
