<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <script
            type="text/javascript"
            src="https://cdn.quilljs.com/1.3.6/quill.js"
        ></script>
        <!-- Theme included stylesheets -->
        <link
            href="https://cdn.quilljs.com/1.3.6/quill.snow.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.quilljs.com/1.3.6/quill.bubble.css"
            rel="stylesheet"
        />

        <!-- Core build with no theme, formatting, non-essential modules -->
        <link
            href="https://cdn.quilljs.com/1.3.6/quill.core.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />

        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        @include('navbar')
        <div style="width: 98%; height: 100vh" class="container-fluid">
            <div class="row h-100">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-color">
                    @include('navlink')
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 bg-color1">
                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >Name :
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="name"
                                />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1"
                                    >title</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    placeholder="title "
                                />
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1"
                                    >group</label
                                >
                                <select
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1"
                                    >Example file input</label
                                >
                                <input
                                    multiple
                                    type="file"
                                    class="form-control-file"
                                    id="exampleFormControlFile1"
                                />
                            </div>
                            <div class="form-group w-100">
                                <div id="editor"></div>
                            </div>

                            <button class="btn btn-block" type="submit">
                                ADD PRODUCT
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <script>
            const body = document.getElementById("editor");

            body.innerHTML = `
<div id="editor-in-container"></div>
`;

            const secondContainer = document.querySelector(
                "#editor-in-container"
            );
            const shadow = secondContainer.attachShadow({ mode: "open" });

            shadow.innerHTML = `
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
<div id="editor-in"></div>
`;

            const editorIn = shadow.querySelector("#editor-in");

            var quill = new Quill(editorIn, {
                modules: {
                    toolbar: [
                        [
                            "bold",
                            "italic",
                            "underline",
                            "strike",
                            "blockquote",
                            "code-block",
                            {
                                list: "ordered",
                            },
                            {
                                list: "bullet",
                            },
                            {
                                script: "sub",
                            },
                            {
                                script: "super",
                            },
                            {
                                indent: -1,
                            },
                            {
                                indent: "+1",
                            },
                            {
                                direction: "rtl",
                            },
                            {
                                size: ["small", false, "large", "huge"],
                            },
                            {
                                color: [],
                            },
                            {
                                background: [],
                            },
                            {
                                font: [],
                            },
                            {
                                align: [],
                            },
                            "clean",
                            "link",
                            "image",
                            "video",
                        ],
                    ],
                },
                placeholder: "Compose an epic...",
                theme: "snow",
            });

            const normalizeNative = (nativeRange) => {
                if (nativeRange) {
                    const range = nativeRange;

                    if (range.baseNode) {
                        range.startContainer = nativeRange.baseNode;
                        range.endContainer = nativeRange.focusNode;
                        range.startOffset = nativeRange.baseOffset;
                        range.endOffset = nativeRange.focusOffset;

                        if (range.endOffset < range.startOffset) {
                            range.startContainer = nativeRange.focusNode;
                            range.endContainer = nativeRange.baseNode;
                            range.startOffset = nativeRange.focusOffset;
                            range.endOffset = nativeRange.baseOffset;
                        }
                    }

                    if (range.startContainer) {
                        return {
                            start: {
                                node: range.startContainer,
                                offset: range.startOffset,
                            },
                            end: {
                                node: range.endContainer,
                                offset: range.endOffset,
                            },
                            native: range,
                        };
                    }
                }

                return null;
            };

            quill.selection.getNativeRange = () => {
                const dom = quill.root.getRootNode();
                const selection = dom.getSelection();
                const range = normalizeNative(selection);

                return range;
            };

            document.addEventListener("selectionchange", (e) => {
                console.log(e.target);
                quill.selection.update();
            });
            quill.on("text-change", function () {
                var justHtml = quill.root.innerHTML;
                console.log(justHtml);
            });
        </script>
    </body>
</html>
