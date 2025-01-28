# Helasure UI Components Documentation

## Overview
This document provides an overview of all Helasure UI components, their purpose, usage, and how to customize them using the `helasure-` prefix.

---

## 1. ActionMessage.vue
**Purpose:** Displays a success or action confirmation message.

**Usage:**
```vue
<ActionMessage :message="'Profile updated successfully!'" />
```

**Customization:** Modify text color & background using `helasure-text-primary`.

---

## 2. ActionSection.vue
**Purpose:** Used for grouping form actions.

**Usage:**
```vue
<ActionSection>
    <template #title>Account Settings</template>
    <template #description>Update your profile information.</template>
    <template #actions>
        <PrimaryButton>Save</PrimaryButton>
    </template>
</ActionSection>
```

**Customization:** Change section styles with `helasure-card`.

---

## 3. ApplicationLogo.vue
**Purpose:** Displays the app’s logo.

**Usage:**
```vue
<ApplicationLogo />
```

**Customization:** Replace the image in the component.

---

## 4. ApplicationMark.vue
**Purpose:** Similar to `ApplicationLogo.vue`, used in branding marks.

**Usage:**
```vue
<ApplicationMark />
```

**Customization:** Modify SVG/logo styles.

---

## 5. AuthenticationCard.vue
**Purpose:** Wrapper for authentication forms.

**Usage:**
```vue
<AuthenticationCard>
    <form> ... </form>
</AuthenticationCard>
```

**Customization:** Modify card layout with `helasure-card`.

---

## 6. AuthenticationCardLogo.vue
**Purpose:** Displays logo inside `AuthenticationCard.vue`.

**Usage:**
```vue
<AuthenticationCardLogo />
```

**Customization:** Change logo size & margin.

---

## 7. Banner.vue
**Purpose:** Displays system-wide notices or alerts.

**Usage:**
```vue
<Banner type="success" message="Welcome to Helasure!" />
```

**Customization:** Modify colors using `helasure-text-primary`.

---

## 8. Checkbox.vue
**Purpose:** Standard checkbox component.

**Usage:**
```vue
<Checkbox v-model="agree" />
```

**Customization:** Modify checkbox size & color with `helasure-checkbox`.

---

## 9. ConfirmationModal.vue
**Purpose:** Displays a confirmation dialog.

**Usage:**
```vue
<ConfirmationModal v-if="showModal">
    <template #title>Confirm Delete</template>
    <template #content>Are you sure you want to delete this?</template>
    <template #footer>
        <DangerButton @click="confirmDelete">Delete</DangerButton>
    </template>
</ConfirmationModal>
```

**Customization:** Modify modal width & background with `helasure-modal`.

---

## 10. ConfirmsPassword.vue
**Purpose:** Used for confirming actions requiring password entry.

**Usage:**
```vue
<ConfirmsPassword @confirmed="deleteAccount">
    <DangerButton>Delete Account</DangerButton>
</ConfirmsPassword>
```

**Customization:** Modify form input styles with `helasure-input`.

---

## 11. DangerButton.vue
**Purpose:** A red button for destructive actions.

**Usage:**
```vue
<DangerButton @click="deleteItem">Delete</DangerButton>
```

**Customization:** Change color with `helasure-bg-danger`.

---

## 12. DialogModal.vue
**Purpose:** A generic modal for displaying content.

**Usage:**
```vue
<DialogModal v-if="isOpen">
    <template #title>Info</template>
    <template #content>Here is some content</template>
    <template #footer>
        <PrimaryButton @click="close">OK</PrimaryButton>
    </template>
</DialogModal>
```

**Customization:** Modify modal styles with `helasure-modal`.

---

## 13. Dropdown.vue
**Purpose:** A simple dropdown component.

**Usage:**
```vue
<Dropdown>
    <template #trigger>
        <button>Menu</button>
    </template>
    <DropdownLink href="/profile">Profile</DropdownLink>
    <DropdownLink href="/logout">Logout</DropdownLink>
</Dropdown>
```

**Customization:** Modify dropdown positioning with `helasure-dropdown`.

---

## 14. DropdownLink.vue
**Purpose:** Styled links inside dropdowns.

**Usage:**
```vue
<DropdownLink href="/settings">Settings</DropdownLink>
```

**Customization:** Modify text size & hover color.

---

## 15. FormSection.vue
**Purpose:** Wraps a form with title and description.

**Usage:**
```vue
<FormSection>
    <template #title>Update Profile</template>
    <template #description>Change your details here.</template>
    <template #form>
        <TextInput v-model="name" />
    </template>
</FormSection>
```

**Customization:** Modify form padding with `helasure-card`.

---

## 16. HomeNavigation.vue
**Purpose:** The main navigation bar.

**Usage:**
```vue
<HomeNavigation />
```

**Customization:** Modify navbar height & links with `helasure-navbar`.

---

## Customizing Components
To update the entire UI at once, modify `resources/css/app.css`:
```css
.helasure-btn {
    @apply bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-700;
}
```

This allows for easy theme changes across all components.

---

## Next Steps
1. Update components in `resources/js/Components/`.
2. Apply global styles to `app.css`.
3. Test in the browser with `npm run dev`.

🚀 **Helasure UI is now fully customizable!**

