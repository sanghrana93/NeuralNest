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
                <div class="card p-4">
                    <h1>Add Testimonial Comments</h1>
                        <a class="btn btn-primary" href="<?php echo base_url().'addTestimonial'; ?>" title="Edit">
                        Add Comments
                    </a>
                    
                    <div class="col-xs-12">
                        <h2>Team Members</h2>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Client Name</th>
                                <th>Designation</th>
                                <th>Comments</th>
                                <th>Client Photo</th>
                                <th>Product Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                    <tbody>
                    <?php if (!empty($testimonialRecords)) { ?>
                                <?php foreach ($testimonialRecords as $record) { ?>
                    <tr>
                        <td class="textContainer" style="width: 300px; height:100px;"><?php echo htmlspecialchars($record->id); ?></td>
                        <td class="textContainer" style="width: 300px; height:100px;"><?php echo htmlspecialchars($record->client_name); ?></td>
                        <td class="textContainer" style="width: 300px; height:100px;"><?php echo htmlspecialchars($record->client_designation); ?></td>
                        <td class="textContainer" style="width: 300px; height:100px;"><?php echo htmlspecialchars($record->client_comments); ?></td>
                        <td style="width: 300px; height:100px;">
                            <img src="<?= base_url(htmlspecialchars($record->client_photo)); ?>" alt="" srcset="" style="width: 150px;">
                        </td>
                        <td style="width: 300px; height:100px;">
                            <img src="<?= base_url(htmlspecialchars($record->product_logo)); ?>" alt="" srcset="" style="width: 150px;">
                        </td>
                        <td class="text-center" style="display:flex">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url().'testimonialEdit/' . $record->id; ?>" title="edit" style="margin-left: 4px">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="<?= base_url('testimonialEdit/' . $record->id) ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this team member?')" style="margin-left: 4px">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="23" class="text-center">No records found</td>
                                </tr>
                            <?php } ?>
                    </tbody>
                    </table>
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
