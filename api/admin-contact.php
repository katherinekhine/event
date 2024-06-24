<?php

include "../vendor/autoload.php";

use api\classes\Contact;

$contact = new Contact();
$contact = $contact->contactShow();

?>

<?php
include "components/admin-header.php";
?>

<div class="mt-5 lg:px-20 px-5 mb-5">
    <table class="table-fixed w-full border border-collapse">
        <thead class=" bg-slate-600">
            <tr class=" text-color-primary">
                <th class="border border-collapse py-3">User Name</th>
                <th class="border border-collapse py-3">Email</th>
                <th class="border border-collapse py-3">Message</th>
            </tr>
        </thead>
        <?php foreach ($contact as $contacts) : ?>
            <tbody>
                <tr>
                    <td class="border border-collapse p-3"><?= $contacts['name'] ?></td>
                    <td class="border border-collapse text-center p-3"><?= $contacts['email'] ?></td>
                    <td class="border border-collapse text-justify p-3"><?= $contacts['msg'] ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>