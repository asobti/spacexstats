@extends('templates.main')
@section('title', 'Review Queue')

@section('content')
<body class="review" ng-app="reviewApp" ng-controller="reviewController" ng-strict-di>

    @include('templates.flashMessage')
    @include('templates.header')

    <div class="content-wrapper">
        <h1>Review Queue</h1>
        <main>
            <p class="review-queue-lengths"><span data-bind="text: objectsToReview().length"></span> items to review.</p>
            <table data-bind="template: { name: 'object-review-template', foreach: objectsToReview, as: 'objectToReview' }">
            </table>
        </main>
    </div>

    <script type="text/html" id="object-review-template">
        <tr>
            <td><img data-bind="attr: { src: media_thumb_small }" /></td>
            <td><a data-bind="text: title, attr : { href: linkToObject }"></a></td>
            <td data-bind="text: textType"></td>
            <td data-bind="text: textSubtype"></td>
            <td>Uploaded by <a data-bind="text: user.username, attr { href: linkToUser }"></a></td>
            <td data-bind="text: createdAtRelative, attr: { title: created_at }"></td>
            <td><select data-bind="options: $root.visibilities"></select></td>
            <td>
                <button data-bind="click: setAction.bind($data, 'Published')">Publish</button>
            </td>
            <td>
                <button data-bind="click: setAction.bind($data, 'Deleted')">Remove</button>
            </td>
        </tr>
        <tr class="obect-extra-details">
            <td colspan="7" data-bind="text: summary"></td>
        </tr>
    </script>
</body>
@stop