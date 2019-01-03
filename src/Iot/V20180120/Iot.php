<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Iot based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Iot\V20180120
 *
 * @method ActiveDevice activeDevice(array $options = [])
 * @method AddEventRecordPlanDevice addEventRecordPlanDevice(array $options = [])
 * @method AddRecordPlanDevice addRecordPlanDevice(array $options = [])
 * @method AhQueryDeviceList ahQueryDeviceList(array $options = [])
 * @method BatchAddDeviceGroupRelations batchAddDeviceGroupRelations(array $options = [])
 * @method BatchCheckDeviceNames batchCheckDeviceNames(array $options = [])
 * @method BatchDeleteDeviceGroupRelations batchDeleteDeviceGroupRelations(array $options = [])
 * @method BatchGetDeviceState batchGetDeviceState(array $options = [])
 * @method BatchRegisterDevice batchRegisterDevice(array $options = [])
 * @method BatchRegisterDeviceWithApplyId batchRegisterDeviceWithApplyId(array $options = [])
 * @method BindDeviceToEdgeInstance bindDeviceToEdgeInstance(array $options = [])
 * @method BindFunctionToEdgeInstance bindFunctionToEdgeInstance(array $options = [])
 * @method CreateDeviceGroup createDeviceGroup(array $options = [])
 * @method CreateEdgeInstance createEdgeInstance(array $options = [])
 * @method CreateEdgeInstanceDeployment createEdgeInstanceDeployment(array $options = [])
 * @method CreateEdgeInstanceMessageRoute createEdgeInstanceMessageRoute(array $options = [])
 * @method CreateProduct createProduct(array $options = [])
 * @method CreateProductTags createProductTags(array $options = [])
 * @method CreateProductTopic createProductTopic(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateRuleAction createRuleAction(array $options = [])
 * @method CreateTopicRouteTable createTopicRouteTable(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method DeleteDeviceGroup deleteDeviceGroup(array $options = [])
 * @method DeleteDeviceProp deleteDeviceProp(array $options = [])
 * @method DeleteEdgeInstance deleteEdgeInstance(array $options = [])
 * @method DeleteEdgeInstanceMessageRoute deleteEdgeInstanceMessageRoute(array $options = [])
 * @method DeleteEventRecordPlan deleteEventRecordPlan(array $options = [])
 * @method DeleteEventRecordPlanDevice deleteEventRecordPlanDevice(array $options = [])
 * @method DeleteProduct deleteProduct(array $options = [])
 * @method DeleteProductTags deleteProductTags(array $options = [])
 * @method DeleteProductTopic deleteProductTopic(array $options = [])
 * @method DeleteRecordPlan deleteRecordPlan(array $options = [])
 * @method DeleteRecordPlanDevice deleteRecordPlanDevice(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteRuleAction deleteRuleAction(array $options = [])
 * @method DeleteSqlTaskView deleteSqlTaskView(array $options = [])
 * @method DeleteTimeTemplate deleteTimeTemplate(array $options = [])
 * @method DeleteTopicRouteTable deleteTopicRouteTable(array $options = [])
 * @method DisableThing disableThing(array $options = [])
 * @method EnableThing enableThing(array $options = [])
 * @method GenerateOssUriForTsl generateOssUriForTsl(array $options = [])
 * @method GetDeviceProductList getDeviceProductList(array $options = [])
 * @method GetDeviceShadow getDeviceShadow(array $options = [])
 * @method GetDeviceStatus getDeviceStatus(array $options = [])
 * @method GetEdgeInstance getEdgeInstance(array $options = [])
 * @method GetEdgeInstanceMessageRoute getEdgeInstanceMessageRoute(array $options = [])
 * @method GetGatewayBySubDevice getGatewayBySubDevice(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetRuleAction getRuleAction(array $options = [])
 * @method GetThingTopo getThingTopo(array $options = [])
 * @method ImportTslFromOss importTslFromOss(array $options = [])
 * @method InvokeThingService invokeThingService(array $options = [])
 * @method InvokeThingsService invokeThingsService(array $options = [])
 * @method ListProductByTags listProductByTags(array $options = [])
 * @method ListProductTags listProductTags(array $options = [])
 * @method ListRule listRule(array $options = [])
 * @method ListRuleActions listRuleActions(array $options = [])
 * @method ModifyDeviceStatus modifyDeviceStatus(array $options = [])
 * @method NotifyAddThingTopo notifyAddThingTopo(array $options = [])
 * @method Pub pub(array $options = [])
 * @method PubBroadcast pubBroadcast(array $options = [])
 * @method QueryAhDeviceList queryAhDeviceList(array $options = [])
 * @method QueryAppDeviceList queryAppDeviceList(array $options = [])
 * @method QueryBatchRegisterDeviceStatus queryBatchRegisterDeviceStatus(array $options = [])
 * @method QueryDevice queryDevice(array $options = [])
 * @method QueryDeviceByTags queryDeviceByTags(array $options = [])
 * @method QueryDeviceDetail queryDeviceDetail(array $options = [])
 * @method QueryDeviceEvent queryDeviceEvent(array $options = [])
 * @method QueryDeviceEventData queryDeviceEventData(array $options = [])
 * @method QueryDeviceEventPicture queryDeviceEventPicture(array $options = [])
 * @method QueryDeviceEventRecord queryDeviceEventRecord(array $options = [])
 * @method QueryDeviceFileVod queryDeviceFileVod(array $options = [])
 * @method QueryDeviceGroupByDevice queryDeviceGroupByDevice(array $options = [])
 * @method QueryDeviceGroupByTags queryDeviceGroupByTags(array $options = [])
 * @method QueryDeviceGroupInfo queryDeviceGroupInfo(array $options = [])
 * @method QueryDeviceGroupList queryDeviceGroupList(array $options = [])
 * @method QueryDeviceGroupTagList queryDeviceGroupTagList(array $options = [])
 * @method QueryDeviceList queryDeviceList(array $options = [])
 * @method QueryDeviceListByDeviceGroup queryDeviceListByDeviceGroup(array $options = [])
 * @method QueryDevicePictureFile queryDevicePictureFile(array $options = [])
 * @method QueryDevicePictureLifeCycle queryDevicePictureLifeCycle(array $options = [])
 * @method QueryDeviceProp queryDeviceProp(array $options = [])
 * @method QueryDevicePropertiesData queryDevicePropertiesData(array $options = [])
 * @method QueryDevicePropertyData queryDevicePropertyData(array $options = [])
 * @method QueryDevicePropertyStatus queryDevicePropertyStatus(array $options = [])
 * @method QueryDeviceRecordLifeCycle queryDeviceRecordLifeCycle(array $options = [])
 * @method QueryDeviceServiceData queryDeviceServiceData(array $options = [])
 * @method QueryDeviceStatistics queryDeviceStatistics(array $options = [])
 * @method QueryEdgeInstance queryEdgeInstance(array $options = [])
 * @method QueryEdgeInstanceDeployDetail queryEdgeInstanceDeployDetail(array $options = [])
 * @method QueryEdgeInstanceDevice queryEdgeInstanceDevice(array $options = [])
 * @method QueryEdgeInstanceFunction queryEdgeInstanceFunction(array $options = [])
 * @method QueryEdgeInstanceGateway queryEdgeInstanceGateway(array $options = [])
 * @method QueryEdgeInstanceMessageRoute queryEdgeInstanceMessageRoute(array $options = [])
 * @method QueryEventRecordPlanByDevice queryEventRecordPlanByDevice(array $options = [])
 * @method QueryEventRecordPlanDetail queryEventRecordPlanDetail(array $options = [])
 * @method QueryEventRecordPlanDevices queryEventRecordPlanDevices(array $options = [])
 * @method QueryEventRecordPlans queryEventRecordPlans(array $options = [])
 * @method QueryLiveStreaming queryLiveStreaming(array $options = [])
 * @method QueryMeasureList queryMeasureList(array $options = [])
 * @method QueryMeasureSummary queryMeasureSummary(array $options = [])
 * @method QueryMeasureTop queryMeasureTop(array $options = [])
 * @method QueryMonthRecord queryMonthRecord(array $options = [])
 * @method QueryPageByApplyId queryPageByApplyId(array $options = [])
 * @method QueryPictureFiles queryPictureFiles(array $options = [])
 * @method QueryProduct queryProduct(array $options = [])
 * @method QueryProductBiz queryProductBiz(array $options = [])
 * @method QueryProductList queryProductList(array $options = [])
 * @method QueryProductTopic queryProductTopic(array $options = [])
 * @method QueryRecord queryRecord(array $options = [])
 * @method QueryRecordPlanByDevice queryRecordPlanByDevice(array $options = [])
 * @method QueryRecordPlanDetail queryRecordPlanDetail(array $options = [])
 * @method QueryRecordPlanDevices queryRecordPlanDevices(array $options = [])
 * @method QueryRecordPlans queryRecordPlans(array $options = [])
 * @method QueryRecordUrl queryRecordUrl(array $options = [])
 * @method QuerySuperDeviceGroup querySuperDeviceGroup(array $options = [])
 * @method QueryTimeTemplate queryTimeTemplate(array $options = [])
 * @method QueryTimeTemplateDetail queryTimeTemplateDetail(array $options = [])
 * @method QueryTopicReverseRouteTable queryTopicReverseRouteTable(array $options = [])
 * @method QueryTopicRouteTable queryTopicRouteTable(array $options = [])
 * @method RRpc rRpc(array $options = [])
 * @method RegisterDevice registerDevice(array $options = [])
 * @method RemoveThingTopo removeThingTopo(array $options = [])
 * @method ResetEdgeInstanceDeployments resetEdgeInstanceDeployments(array $options = [])
 * @method SaveDeviceProp saveDeviceProp(array $options = [])
 * @method SetDeviceGroupTags setDeviceGroupTags(array $options = [])
 * @method SetDevicePictureLifeCycle setDevicePictureLifeCycle(array $options = [])
 * @method SetDeviceProperty setDeviceProperty(array $options = [])
 * @method SetDeviceRecordLifeCycle setDeviceRecordLifeCycle(array $options = [])
 * @method SetDeviceStorageLifeCycle setDeviceStorageLifeCycle(array $options = [])
 * @method SetDevicesProperty setDevicesProperty(array $options = [])
 * @method SetEventRecordPlan setEventRecordPlan(array $options = [])
 * @method SetRecordPlan setRecordPlan(array $options = [])
 * @method SetTimeTemplate setTimeTemplate(array $options = [])
 * @method StartRule startRule(array $options = [])
 * @method StopLiveStreaming stopLiveStreaming(array $options = [])
 * @method StopRule stopRule(array $options = [])
 * @method TriggerCapturePicture triggerCapturePicture(array $options = [])
 * @method TriggerRecord triggerRecord(array $options = [])
 * @method UnbindDeviceFromEdgeInstance unbindDeviceFromEdgeInstance(array $options = [])
 * @method UnbindFunctionFromEdgeInstance unbindFunctionFromEdgeInstance(array $options = [])
 * @method UpdateDeviceGroup updateDeviceGroup(array $options = [])
 * @method UpdateDeviceShadow updateDeviceShadow(array $options = [])
 * @method UpdateEdgeInstance updateEdgeInstance(array $options = [])
 * @method UpdateEdgeInstanceFunction updateEdgeInstanceFunction(array $options = [])
 * @method UpdateEdgeInstanceMessageRoute updateEdgeInstanceMessageRoute(array $options = [])
 * @method UpdateEventRecordPlan updateEventRecordPlan(array $options = [])
 * @method UpdateEventRecordPlanDevice updateEventRecordPlanDevice(array $options = [])
 * @method UpdateProduct updateProduct(array $options = [])
 * @method UpdateProductTags updateProductTags(array $options = [])
 * @method UpdateProductTopic updateProductTopic(array $options = [])
 * @method UpdateRecordPlan updateRecordPlan(array $options = [])
 * @method UpdateRecordPlanDevice updateRecordPlanDevice(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateRuleAction updateRuleAction(array $options = [])
 * @method UpdateTimeTemplate updateTimeTemplate(array $options = [])
 */
class Iot
{
    use ApiResolverTrait;
}