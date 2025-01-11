<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar"></i> Neural Nest, LLC
            <small>What we serve</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Business Intelligence and Analytics</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Banner Title</th>
                                <th>Banner Content</th>
                                <th>Sub Title</th>
                                <th>Sub Content</th>
                                <th>Card 1 Title</th>
                                <th>Card 1 Content</th>
                                <th>Card 2 Title</th>
                                <th>Card 2 Content</th>
                                <th>Card 3 Title</th>
                                <th>Card 3 Content</th>
                                <th>S1 Title</th>
                                <th>S1 Content</th>
                                <th>S2 Title</th>
                                <th>S2 Content</th>
                                <th>S3 Title</th>
                                <th>S3 Content</th>
                                <th>Sub Heading Title</th>
                                <th>Workprocess Title</th>
                                <th>Workprocess Content</th>
                                <th>Inquiry Title</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            <?php if (!empty($businessAnalyticsRecords)) { ?>
                                <?php foreach ($businessAnalyticsRecords as $record) { ?>
                                    <tr>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->banner_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->banner_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->b_sub_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->b_sub_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card1_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card1_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card2_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card2_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card3_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->card3_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s1_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s1_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s2_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s2_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s3_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s3_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->sub_heading_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->workprocess_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->workprocess_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->Inquary_Title); ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info"
                                               href="<?php echo base_url().'dataArchitectureEdit/'.$record->id; ?>" title="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="21" class="text-center">No records found</td>
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
