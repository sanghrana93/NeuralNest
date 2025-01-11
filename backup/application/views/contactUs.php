<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar"></i> Neural Nest, LLC
            <small>Contact Us</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contact Us</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Address Title</th>
                                <th>Address Content</th>
                                <th>Contact Title</th>
                                <th>Contact Content</th>
                                <th>Support Title</th>
                                <th>Support Content</th>
                                <th>Message Title</th>
                                <th>Message Content</th>
                                <th>Message Sub Title</th>
                                <th>Inquiry Title</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            <?php if (!empty($contactUsRecords)) { ?>
                                <?php foreach ($contactUsRecords as $record) { ?>
                                    <tr>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->address_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->address_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->contact_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->contact_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->support_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->support_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->message_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->message_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->message_sub_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->Inquary_Title); ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info"
                                               href="<?php echo base_url().'contactUsEdit/'.$record->id; ?>" title="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="13" class="text-center">No records found</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function applyEllipsis(element, maxWidth) {
        const originalText = element.textContent;
        const hiddenSpan = document.createElement("span");

        // Copy styles and append the hidden span
        hiddenSpan.style.visibility = "hidden";
        hiddenSpan.style.position = "absolute";
        hiddenSpan.style.whiteSpace = "nowrap";
        hiddenSpan.style.font = window.getComputedStyle(element).font;
        document.body.appendChild(hiddenSpan);

        let truncatedText = originalText;

        hiddenSpan.textContent = truncatedText;

        // Reduce text length until it fits
        while (hiddenSpan.offsetWidth > maxWidth && truncatedText.length > 0) {
            truncatedText = truncatedText.slice(0, -1);
            hiddenSpan.textContent = truncatedText + "...";
        }

        // Set the final truncated text
        element.textContent = hiddenSpan.textContent;
        document.body.removeChild(hiddenSpan);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const textContainers = document.querySelectorAll(".textContainer");
        textContainers.forEach((textContainer) => applyEllipsis(textContainer, 300));
    });
</script>
</body>
