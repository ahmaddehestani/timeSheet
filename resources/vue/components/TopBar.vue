<template>
    <div class="fixed-shell-bar">
        <ui5-bar design="Header">
            <div slot="startContent">
                <slot name="start">
                    <TopBarStartContents />
                </slot>
            </div>

            <slot name="center">
                <DigitalClock />
            </slot>

            <div slot="endContent">
                <slot name="end">
                    <TopBarEndContents />
                </slot>
            </div>
        </ui5-bar>
    </div>





    <style>
        .card-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
    </style>

    <ui5-card class="medium">
        <ui5-card-header slot="header" title-text="Team Space" subtitle-text="Direct Reports" status="3 of 10">
            <ui5-icon name="group" slot="avatar"></ui5-icon>
            <ui5-button design="Transparent" slot="action">View All</ui5-button>
        </ui5-card-header>
        <div class="card-content">
            <ui5-list separators="None" class="card-content-child" style="width: 100%; margin-bottom: 0.75rem;">
                <ui5-li image="../../../assets/images/avatars/man_avatar_1.png" description="User Researcher">Alain Chevalier</ui5-li>
                <ui5-li image="../../../assets/images/avatars/woman_avatar_1.png" description="Artist">Monique Legrand</ui5-li>
                <ui5-li image="../../../assets/images/avatars/woman_avatar_2.png" description="UX Specialist">Isabella Adams</ui5-li>
            </ui5-list>

        </div>
    </ui5-card>
    <ui5-card class="medium">
        <ui5-card-header slot="header" title-text="This header is interactive" interactive subtitle-text="Click, press Enter or Space" status="3 of 6">
            <ui5-icon name="group" slot="avatar"></ui5-icon>
        </ui5-card-header>
        <div class="card-content">
            <ui5-list separators="None" class="card-content-child" style="width: 100%; margin-bottom: 0.75rem;">
                <ui5-li image="../../../assets/images/avatars/man_avatar_2.png" description="Software Architect">Richard Wilson</ui5-li>
                <ui5-li image="../../../assets/images/avatars/woman_avatar_3.png" description="Visual Designer">Elena Petrova</ui5-li>
                <ui5-li image="../../../assets/images/avatars/man_avatar_3.png" description="Quality Specialist">John Miller</ui5-li>
            </ui5-list>
        </div>
    </ui5-card>

</template>

<script setup>
import "@ui5/webcomponents/dist/Button.js";
import "@ui5/webcomponents/dist/icon.js";
import "@ui5/webcomponents/dist/bar.js";


import TopBarEndContents from './TopBarEndContents.vue';
import TopBarStartContents from './TopBarStartContents.vue';
import DigitalClock from './DigitalClock.vue';
impo
</script>
