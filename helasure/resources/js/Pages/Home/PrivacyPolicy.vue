<template>
    <HomeNavigation    />
    <div class="container mx-auto py-8 px-6 max-w-4xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Privacy Policy</h1>
        <p class="text-gray-600">Last Updated: March 2025</p>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">1. Introduction</h2>
            <p class="text-gray-600 mt-2">
                This Privacy Policy describes how Helasure <b>collects, uses, stores, and protects</b> your personal information when you use our services. We are committed to complying with the <b>Data Protection Act, 2019 (Kenya)</b> to ensure your data is handled responsibly.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">2. Information We Collect</h2>
            <p class="text-gray-600 mt-2">
                When you use Helasure, we may collect the following types of information:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>Personal Information:</b> Name, phone number, email address, and payment details.</li>
                    <li><b>Transaction Data:</b> Escrow transaction history, payment details, and dispute resolutions.</li>
                    <li><b>Device Information:</b> IP address, browser type, operating system, and usage patterns.</li>
                    <li><b>Communication Data:</b> Emails, customer support messages, and feedback submissions.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">3. How We Use Your Information</h2>
            <p class="text-gray-600 mt-2">
                We use your data to:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>Provide escrow services</b> and process transactions.</li>
                    <li><b>Enhance security</b> and prevent fraudulent activities.</li>
                    <li><b>Comply with legal obligations</b> and regulatory requirements.</li>
                    <li><b>Improve our services</b> through user feedback and analytics.</li>
                    <li><b>Send important notifications</b> regarding your account and transactions.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">4. How We Protect Your Information</h2>
            <p class="text-gray-600 mt-2">
                We take <b>data security seriously</b> and implement the following safeguards:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>End-to-End Encryption (E2EE):</b> Protecting your sensitive data from unauthorized access.</li>
                    <li><b>Access Controls:</b> Limiting data access to authorized personnel only.</li>
                    <li><b>Secure Payment Processing:</b> Using PCI-DSS-compliant payment gateways.</li>
                    <li><b>Regular Security Audits:</b> Ensuring our systems meet industry standards.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">5. Data Retention</h2>
            <p class="text-gray-600 mt-2">
                We retain your personal data <b>only as long as necessary</b> for legal, regulatory, and operational purposes:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>Transaction records:</b> Retained for at least <b>7 years</b> in compliance with <b>Kenyan financial regulations</b>.</li>
                    <li><b>Inactive accounts:</b> Deleted or anonymized after <b>5 years of inactivity</b>.</li>
                    <li><b>Communication records:</b> Retained for <b>up to 3 years</b> for customer service purposes.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">6. Your Rights</h2>
            <p class="text-gray-600 mt-2">
                Under the <b>Kenyan Data Protection Act, 2019</b>, you have the right to:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>Access:</b> Request a copy of your personal data.</li>
                    <li><b>Correction:</b> Update inaccurate or incomplete data.</li>
                    <li><b>Deletion:</b> Request the removal of your data unless required by law.</li>
                    <li><b>Objection:</b> Restrict or object to the processing of your data.</li>
                    <li><b>Withdraw Consent:</b> Opt-out of marketing and non-essential communications.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">7. Sharing Your Information</h2>
            <p class="text-gray-600 mt-2">
                We do <b>not</b> sell or rent your personal data. However, we may share your data with:
                <ul class="list-disc ml-6 mt-2 text-gray-600">
                    <li><b>Regulatory Authorities:</b> As required by Kenyan law.</li>
                    <li><b>Third-Party Service Providers:</b> For payment processing, fraud prevention, and analytics.</li>
                    <li><b>Legal Investigations:</b> If required by law enforcement agencies.</li>
                </ul>
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">8. International Data Transfers</h2>
            <p class="text-gray-600 mt-2">
                If we transfer your data outside Kenya, we ensure that <b>appropriate safeguards</b> are in place to protect your privacy.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">9. Cookies & Tracking Technologies</h2>
            <p class="text-gray-600 mt-2">
                We use cookies to enhance user experience and analytics. You can <b>manage or disable</b> cookies in your browser settings.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">10. Changes to This Privacy Policy</h2>
            <p class="text-gray-600 mt-2">
                We may update this policy periodically. Changes take effect upon posting. We encourage users to <b>review this page regularly</b>.
            </p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-semibold text-gray-700">11. Contact Information</h2>
            <p class="text-gray-600 mt-2">
                If you have any questions about this Privacy Policy, you can reach us at:
                <b class="block mt-2">Email: privacy@helasure.com</b>
                <b>Phone: +254 712 345 678</b>
            </p>
        </section>
    </div>
    <Footer />
</template>
<script setup lang="ts">
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
</script>
