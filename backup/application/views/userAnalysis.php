
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-calendar"></i> Neural Nest, LLC
            <small>Who we are</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">User Analysis</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 10%">Banner Title</th>
                                <th style="width: 10%">Banner Content</th>
                                <th style="width: 10%">Services Title</th>
                                <th style="width: 10%">Services Content</th>
                                <th style="width: 10%">S1</th>
                                <th style="width: 10%">S1 Content</th>
                                <th style="width: 10%">S2</th>
                                <th style="width: 10%">S2 Content</th>
                                <th style="width: 10%">S3</th>
                                <th style="width: 10%">S3 Content</th>
                                <th style="width: 10%">Target Title</th>
                                <th style="width: 10%">Target Content</th>
                                <th style="width: 10%">Workprocess Title</th>
                                <th style="width: 10%">Workprocess Content</th>
                                <th class="text-center" style="width: 10%">Actions</th>
                            </tr>
                            <?php if (!empty($userAnalysisRecords)) { ?>
                                <?php foreach ($userAnalysisRecords as $record) { ?>
                                    <tr>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->b_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->b_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->Serv_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->Serv_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s1_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s1_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s2_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s2_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s3_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->s3_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->target_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->target_content); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->workprocess_title); ?></td>
                                        <td class="textContainer" style="width: 300px;"><?php echo htmlspecialchars($record->workprocess_content); ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info"
                                               href="<?php echo base_url().'userAnalysisEdit/'.$record->id; ?>" title="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                            <!-- <a class="btn btn-sm btn-danger deleteUserAnalysis" href="#"
                                               data-demoid="<?php echo $record->id; ?>" title="Delete"><i
                                                    class="fa fa-trash"></i></a> -->
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="1" class="text-center">No records found</td>
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
</html>
