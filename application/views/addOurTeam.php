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
                    <h1>Add Team Member</h1>

                    <form action="<?= base_url('saveOurTeam') ?>" method="POST" enctype="multipart/form-data" class="mb-4 col-xs-6">
                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="member_name" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation:</label>
                            <input type="text" name="member_designation" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content:</label>
                            <textarea name="member_content" class="form-control" ></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Inquiry Title:</label>
                            <input type="text" name="Inquary_Title" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Photo:</label>
                            <input type="file" name="member_photo" class="form-control" style="width: 150px;">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Add Member</button>
                            <a href="<?= base_url('ourTeam') ?>" class="btn btn-danger" style="margin-top: 10px;">Cancel</a>
                        </div>
                    </form>
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
