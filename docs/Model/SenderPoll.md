# # SenderPoll

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Use the phone number or [Chat ID](https://support.whapi.cloud/help-desk/faq/chat-id.-what-is-it-and-how-to-get-it) of the contact/group/channel to which you want to send the message. Use [Get groups](https://whapi.readme.io/reference/getgroups) to get the group ID. |
**quoted** | **string** | Message ID of the message to be quoted | [optional]
**ephemeral** | **int** | Time in seconds for the message to be deleted. The Disappearing messages setting should be enabled in the chat where you are sending this message. | [optional]
**edit** | **string** | Message ID of the message to be edited | [optional]
**title** | **string** | Title of poll |
**options** | **string[]** | Options of poll |
**count** | **int** | Number of selectable options in poll (1 - can choose only one option, 0 - any number of options) | [optional]
**view_once** | **bool** | Is view once | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)