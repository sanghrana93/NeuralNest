
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
                    
                    <div class="container">
                
                        <div class="box-header">
                            <h2 class="box-title font-weight-bold">Contact Us</h2>
                        </div>
                    
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <?php if (!empty($contactUsRecords)) { ?>
                                    <?php foreach ($contactUsRecords as $record) { ?>
                                        <tr>
                                            <th style="width: 20%;">Address Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->address_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Address Content</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->address_content); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Contact Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->contact_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Contact Content</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->contact_content); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Support Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->support_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Support Content</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->support_content); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Message Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->message_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Message Content</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->message_content); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Message Sub Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->message_sub_title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Inquiry Title</th>
                                            <td style="width: 80%;"><?php echo htmlspecialchars($record->Inquary_Title); ?></td>
                                        </tr>
                                        <tr>
                                            <th style="width: 20%;">Actions</th>
                                            <td style="width: 80%;" class="text-center">
                                                <a class="btn btn-sm btn-info"
                                                href="<?php echo base_url().'contactUsEdit/'.$record->id; ?>" title="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><hr></td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="2" class="text-center">No records found</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
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
