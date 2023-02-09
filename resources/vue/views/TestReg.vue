<ui5-dialog
    id="login-dialog"
    icon="decline"
    header-text="ورود"
>
<div slot="header">
    <ui5-title level="H4">
        ورود
    </ui5-title>
</div>
<div
    slot="header"
    class="fd-has-display-flex fd-margin-top-bottom--tiny"
    style="justify-content: end; width: 100%"
>
    <ui5-button
        icon="decline"
        tooltip="بستن پنجره"
        design="Transparent"
        @click="closeDialogById('login-dialog')"
    />
</div>

<div class="fd-margin-begin-end--md">
    <ui5-label
        id="login-with-email"
        for="login-with-email"
        show-colon=""
    >
        پست الکترونیکی
    </ui5-label>
    <div>
        <ui5-input
            id="login-with-email"
            class="fd-margin-top-bottom--tiny"
        />
    </div>
</div>

<div class="fd-margin-begin-end--md">
    <ui5-label
        id="login-with-password"
        for="login-with-password"
        show-colon=""
    >
        رمز عبور
    </ui5-label>
    <div>
        <ui5-input
            id="login-with-password"
            class="fd-margin-top-bottom--tiny"
        />
    </div>
</div>

<div
    slot="footer"
    class="fd-has-display-flex fd-has-align-items-center fd-margin-top-bottom--tiny"
    style="justify-content: end; width: 100%"
>
    <ui5-button
        id="edit-record-button"
        design="Emphasized"
        icon="edit"
        @click="editRecord"
    >
        ویرایش
    </ui5-button>
</div>
</ui5-dialog>
