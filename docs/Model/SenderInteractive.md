# # SenderInteractive

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**header** | [**\OpenAPI\Client\Model\MessagePropsInteractiveHeader**](MessagePropsInteractiveHeader.md) |  | [optional]
**body** | [**\OpenAPI\Client\Model\MessagePropsInteractiveBody**](MessagePropsInteractiveBody.md) |  | [optional]
**footer** | [**\OpenAPI\Client\Model\MessagePropsInteractiveFooter**](MessagePropsInteractiveFooter.md) |  | [optional]
**action** | [**\OpenAPI\Client\Model\InteractiveAction**](InteractiveAction.md) |  |
**type** | [**\OpenAPI\Client\Model\InteractiveType**](InteractiveType.md) |  | [optional]
**view_once** | **bool** | Is view once | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)