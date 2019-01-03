<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Vpc based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Vpc\V20160428
 *
 * @method ActivateRouterInterface activateRouterInterface(array $options = [])
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method AddBandwidthPackageIps addBandwidthPackageIps(array $options = [])
 * @method AddBgpNetwork addBgpNetwork(array $options = [])
 * @method AddCommonBandwidthPackageIp addCommonBandwidthPackageIp(array $options = [])
 * @method AddGlobalAccelerationInstanceIp addGlobalAccelerationInstanceIp(array $options = [])
 * @method AddIPv6TranslatorAclListEntry addIPv6TranslatorAclListEntry(array $options = [])
 * @method AllocateEipAddress allocateEipAddress(array $options = [])
 * @method AllocateEipAddresses allocateEipAddresses(array $options = [])
 * @method AllocateIpv6InternetBandwidth allocateIpv6InternetBandwidth(array $options = [])
 * @method AssociateEipAddress associateEipAddress(array $options = [])
 * @method AssociateGlobalAccelerationInstance associateGlobalAccelerationInstance(array $options = [])
 * @method AssociateHaVip associateHaVip(array $options = [])
 * @method AssociatePhysicalConnectionToVirtualBorderRouter associatePhysicalConnectionToVirtualBorderRouter(array $options = [])
 * @method AssociateRouteTable associateRouteTable(array $options = [])
 * @method CancelPhysicalConnection cancelPhysicalConnection(array $options = [])
 * @method ConnectRouterInterface connectRouterInterface(array $options = [])
 * @method ConvertBandwidthPackage convertBandwidthPackage(array $options = [])
 * @method CreateBandwidthPackage createBandwidthPackage(array $options = [])
 * @method CreateBgpGroup createBgpGroup(array $options = [])
 * @method CreateBgpPeer createBgpPeer(array $options = [])
 * @method CreateCommonBandwidthPackage createCommonBandwidthPackage(array $options = [])
 * @method CreateCustomerGateway createCustomerGateway(array $options = [])
 * @method CreateFlowLog createFlowLog(array $options = [])
 * @method CreateForwardEntry createForwardEntry(array $options = [])
 * @method CreateGlobalAccelerationInstance createGlobalAccelerationInstance(array $options = [])
 * @method CreateHaVip createHaVip(array $options = [])
 * @method CreateIPv6Translator createIPv6Translator(array $options = [])
 * @method CreateIPv6TranslatorAclList createIPv6TranslatorAclList(array $options = [])
 * @method CreateIPv6TranslatorEntry createIPv6TranslatorEntry(array $options = [])
 * @method CreateIpv6EgressOnlyRule createIpv6EgressOnlyRule(array $options = [])
 * @method CreateIpv6Gateway createIpv6Gateway(array $options = [])
 * @method CreateIpv6InternetEgressOnlyRule createIpv6InternetEgressOnlyRule(array $options = [])
 * @method CreateNatGateway createNatGateway(array $options = [])
 * @method CreateNqa createNqa(array $options = [])
 * @method CreatePhysicalConnection createPhysicalConnection(array $options = [])
 * @method CreatePhysicalConnectionNew createPhysicalConnectionNew(array $options = [])
 * @method CreatePrivateDNatEntry createPrivateDNatEntry(array $options = [])
 * @method CreatePrivateNatGateway createPrivateNatGateway(array $options = [])
 * @method CreatePrivateSNatEntry createPrivateSNatEntry(array $options = [])
 * @method CreateRouteEntry createRouteEntry(array $options = [])
 * @method CreateRouteTable createRouteTable(array $options = [])
 * @method CreateRouterInterface createRouterInterface(array $options = [])
 * @method CreateSnatEntry createSnatEntry(array $options = [])
 * @method CreateSslVpnClientCert createSslVpnClientCert(array $options = [])
 * @method CreateSslVpnServer createSslVpnServer(array $options = [])
 * @method CreateVSwitch createVSwitch(array $options = [])
 * @method CreateVirtualBorderRouter createVirtualBorderRouter(array $options = [])
 * @method CreateVpc createVpc(array $options = [])
 * @method CreateVpnConnection createVpnConnection(array $options = [])
 * @method CreateVpnGateway createVpnGateway(array $options = [])
 * @method DeactivateRouterInterface deactivateRouterInterface(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method DeleteBgpGroup deleteBgpGroup(array $options = [])
 * @method DeleteBgpNetwork deleteBgpNetwork(array $options = [])
 * @method DeleteBgpPeer deleteBgpPeer(array $options = [])
 * @method DeleteCommonBandwidthPackage deleteCommonBandwidthPackage(array $options = [])
 * @method DeleteCustomerGateway deleteCustomerGateway(array $options = [])
 * @method DeleteFlowLog deleteFlowLog(array $options = [])
 * @method DeleteForwardEntry deleteForwardEntry(array $options = [])
 * @method DeleteGlobalAccelerationInstance deleteGlobalAccelerationInstance(array $options = [])
 * @method DeleteHaVip deleteHaVip(array $options = [])
 * @method DeleteIPv6Translator deleteIPv6Translator(array $options = [])
 * @method DeleteIPv6TranslatorAclList deleteIPv6TranslatorAclList(array $options = [])
 * @method DeleteIPv6TranslatorEntry deleteIPv6TranslatorEntry(array $options = [])
 * @method DeleteIpv6EgressOnlyRule deleteIpv6EgressOnlyRule(array $options = [])
 * @method DeleteIpv6Gateway deleteIpv6Gateway(array $options = [])
 * @method DeleteIpv6InternetBandwidth deleteIpv6InternetBandwidth(array $options = [])
 * @method DeleteIpv6InternetEgressOnlyRule deleteIpv6InternetEgressOnlyRule(array $options = [])
 * @method DeleteLogCollectionAttribute deleteLogCollectionAttribute(array $options = [])
 * @method DeleteNatGateway deleteNatGateway(array $options = [])
 * @method DeleteNqa deleteNqa(array $options = [])
 * @method DeletePhysicalConnection deletePhysicalConnection(array $options = [])
 * @method DeletePrivateDNatEntry deletePrivateDNatEntry(array $options = [])
 * @method DeletePrivateNatGateway deletePrivateNatGateway(array $options = [])
 * @method DeletePrivateSNatEntry deletePrivateSNatEntry(array $options = [])
 * @method DeleteRouteEntry deleteRouteEntry(array $options = [])
 * @method DeleteRouteTable deleteRouteTable(array $options = [])
 * @method DeleteRouterInterface deleteRouterInterface(array $options = [])
 * @method DeleteSnatEntry deleteSnatEntry(array $options = [])
 * @method DeleteSslVpnClientCert deleteSslVpnClientCert(array $options = [])
 * @method DeleteSslVpnServer deleteSslVpnServer(array $options = [])
 * @method DeleteVSwitch deleteVSwitch(array $options = [])
 * @method DeleteVirtualBorderRouter deleteVirtualBorderRouter(array $options = [])
 * @method DeleteVpc deleteVpc(array $options = [])
 * @method DeleteVpnConnection deleteVpnConnection(array $options = [])
 * @method DeleteVpnGateway deleteVpnGateway(array $options = [])
 * @method DescribeAccessPoints describeAccessPoints(array $options = [])
 * @method DescribeBandwidthPackagePublicIpMonitorData describeBandwidthPackagePublicIpMonitorData(array $options = [])
 * @method DescribeBandwidthPackages describeBandwidthPackages(array $options = [])
 * @method DescribeBgpGroups describeBgpGroups(array $options = [])
 * @method DescribeBgpPeers describeBgpPeers(array $options = [])
 * @method DescribeCommonBandwidthPackages describeCommonBandwidthPackages(array $options = [])
 * @method DescribeCustomerGateway describeCustomerGateway(array $options = [])
 * @method DescribeCustomerGateways describeCustomerGateways(array $options = [])
 * @method DescribeEipAddresses describeEipAddresses(array $options = [])
 * @method DescribeEipMonitorData describeEipMonitorData(array $options = [])
 * @method DescribeFlowLogs describeFlowLogs(array $options = [])
 * @method DescribeForwardTableEntries describeForwardTableEntries(array $options = [])
 * @method DescribeGlobalAccelerationInstances describeGlobalAccelerationInstances(array $options = [])
 * @method DescribeHaVips describeHaVips(array $options = [])
 * @method DescribeIPv6TranslatorAclListAttributes describeIPv6TranslatorAclListAttributes(array $options = [])
 * @method DescribeIPv6TranslatorAclLists describeIPv6TranslatorAclLists(array $options = [])
 * @method DescribeIPv6TranslatorEntries describeIPv6TranslatorEntries(array $options = [])
 * @method DescribeIPv6Translators describeIPv6Translators(array $options = [])
 * @method DescribeIpv6Addresses describeIpv6Addresses(array $options = [])
 * @method DescribeIpv6EgressOnlyRules describeIpv6EgressOnlyRules(array $options = [])
 * @method DescribeIpv6GatewayAttribute describeIpv6GatewayAttribute(array $options = [])
 * @method DescribeIpv6Gateways describeIpv6Gateways(array $options = [])
 * @method DescribeNatGateways describeNatGateways(array $options = [])
 * @method DescribeNetworkQuotas describeNetworkQuotas(array $options = [])
 * @method DescribeNqas describeNqas(array $options = [])
 * @method DescribePhysicalConnectionOrder describePhysicalConnectionOrder(array $options = [])
 * @method DescribePhysicalConnections describePhysicalConnections(array $options = [])
 * @method DescribePrivateDNatEntries describePrivateDNatEntries(array $options = [])
 * @method DescribePrivateNatGateways describePrivateNatGateways(array $options = [])
 * @method DescribePrivateSNatEntries describePrivateSNatEntries(array $options = [])
 * @method DescribePublicIpTrafficAuditLogAttribute describePublicIpTrafficAuditLogAttribute(array $options = [])
 * @method DescribeRegionPublicIpAddress describeRegionPublicIpAddress(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRouteEntryList describeRouteEntryList(array $options = [])
 * @method DescribeRouteTableList describeRouteTableList(array $options = [])
 * @method DescribeRouteTables describeRouteTables(array $options = [])
 * @method DescribeRouterInterfaces describeRouterInterfaces(array $options = [])
 * @method DescribeRouterInterfacesForGlobal describeRouterInterfacesForGlobal(array $options = [])
 * @method DescribeServerRelatedGlobalAccelerationInstances describeServerRelatedGlobalAccelerationInstances(array $options = [])
 * @method DescribeSnatTableEntries describeSnatTableEntries(array $options = [])
 * @method DescribeSslVpnClientCert describeSslVpnClientCert(array $options = [])
 * @method DescribeSslVpnClientCerts describeSslVpnClientCerts(array $options = [])
 * @method DescribeSslVpnServers describeSslVpnServers(array $options = [])
 * @method DescribeTrafficAuditLogAttribute describeTrafficAuditLogAttribute(array $options = [])
 * @method DescribeVRouterByVpcId describeVRouterByVpcId(array $options = [])
 * @method DescribeVRouters describeVRouters(array $options = [])
 * @method DescribeVSwitchAttributes describeVSwitchAttributes(array $options = [])
 * @method DescribeVSwitches describeVSwitches(array $options = [])
 * @method DescribeVirtualBorderRouters describeVirtualBorderRouters(array $options = [])
 * @method DescribeVirtualBorderRoutersForPhysicalConnection describeVirtualBorderRoutersForPhysicalConnection(array $options = [])
 * @method DescribeVpcAttribute describeVpcAttribute(array $options = [])
 * @method DescribeVpcs describeVpcs(array $options = [])
 * @method DescribeVpnConnection describeVpnConnection(array $options = [])
 * @method DescribeVpnConnectionLogs describeVpnConnectionLogs(array $options = [])
 * @method DescribeVpnConnections describeVpnConnections(array $options = [])
 * @method DescribeVpnGateway describeVpnGateway(array $options = [])
 * @method DescribeVpnGateways describeVpnGateways(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DisableVpcClassicLink disableVpcClassicLink(array $options = [])
 * @method DownloadVpnConnectionConfig downloadVpnConnectionConfig(array $options = [])
 * @method EnablePhysicalConnection enablePhysicalConnection(array $options = [])
 * @method EnableVpcClassicLink enableVpcClassicLink(array $options = [])
 * @method ModifyBandwidthPackageAttribute modifyBandwidthPackageAttribute(array $options = [])
 * @method ModifyBandwidthPackageSpec modifyBandwidthPackageSpec(array $options = [])
 * @method ModifyBgpGroupAttribute modifyBgpGroupAttribute(array $options = [])
 * @method ModifyCommonBandwidthPackageAttribute modifyCommonBandwidthPackageAttribute(array $options = [])
 * @method ModifyCommonBandwidthPackagePayType modifyCommonBandwidthPackagePayType(array $options = [])
 * @method ModifyCommonBandwidthPackageSpec modifyCommonBandwidthPackageSpec(array $options = [])
 * @method ModifyCustomerGatewayAttribute modifyCustomerGatewayAttribute(array $options = [])
 * @method ModifyEipAddressAttribute modifyEipAddressAttribute(array $options = [])
 * @method ModifyEipPayType modifyEipPayType(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method ModifyForwardEntry modifyForwardEntry(array $options = [])
 * @method ModifyGlobalAccelerationInstanceAttributes modifyGlobalAccelerationInstanceAttributes(array $options = [])
 * @method ModifyGlobalAccelerationInstanceSpec modifyGlobalAccelerationInstanceSpec(array $options = [])
 * @method ModifyHaVipAttribute modifyHaVipAttribute(array $options = [])
 * @method ModifyIPv6TranslatorAclAttribute modifyIPv6TranslatorAclAttribute(array $options = [])
 * @method ModifyIPv6TranslatorAclListEntry modifyIPv6TranslatorAclListEntry(array $options = [])
 * @method ModifyIPv6TranslatorAttribute modifyIPv6TranslatorAttribute(array $options = [])
 * @method ModifyIPv6TranslatorBandwidth modifyIPv6TranslatorBandwidth(array $options = [])
 * @method ModifyIPv6TranslatorEntry modifyIPv6TranslatorEntry(array $options = [])
 * @method ModifyIpv6AddressAttribute modifyIpv6AddressAttribute(array $options = [])
 * @method ModifyIpv6GatewayAttribute modifyIpv6GatewayAttribute(array $options = [])
 * @method ModifyIpv6GatewayAttributes modifyIpv6GatewayAttributes(array $options = [])
 * @method ModifyIpv6GatewaySpec modifyIpv6GatewaySpec(array $options = [])
 * @method ModifyIpv6InternetBandwidth modifyIpv6InternetBandwidth(array $options = [])
 * @method ModifyNatGatewayAttribute modifyNatGatewayAttribute(array $options = [])
 * @method ModifyNatGatewaySpec modifyNatGatewaySpec(array $options = [])
 * @method ModifyNqa modifyNqa(array $options = [])
 * @method ModifyPhysicalConnectionAttribute modifyPhysicalConnectionAttribute(array $options = [])
 * @method ModifyPrivateDNatEntry modifyPrivateDNatEntry(array $options = [])
 * @method ModifyPrivateNatGateway modifyPrivateNatGateway(array $options = [])
 * @method ModifyPrivateSNatEntry modifyPrivateSNatEntry(array $options = [])
 * @method ModifyRouteEntry modifyRouteEntry(array $options = [])
 * @method ModifyRouteTableAttributes modifyRouteTableAttributes(array $options = [])
 * @method ModifyRouterInterfaceAttribute modifyRouterInterfaceAttribute(array $options = [])
 * @method ModifyRouterInterfaceSpec modifyRouterInterfaceSpec(array $options = [])
 * @method ModifySnatEntry modifySnatEntry(array $options = [])
 * @method ModifySslVpnClientCert modifySslVpnClientCert(array $options = [])
 * @method ModifySslVpnServer modifySslVpnServer(array $options = [])
 * @method ModifyVRouterAttribute modifyVRouterAttribute(array $options = [])
 * @method ModifyVSwitchAttribute modifyVSwitchAttribute(array $options = [])
 * @method ModifyVirtualBorderRouterAttribute modifyVirtualBorderRouterAttribute(array $options = [])
 * @method ModifyVpcAttribute modifyVpcAttribute(array $options = [])
 * @method ModifyVpnConnectionAttribute modifyVpnConnectionAttribute(array $options = [])
 * @method ModifyVpnGatewayAttribute modifyVpnGatewayAttribute(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method RecoverVirtualBorderRouter recoverVirtualBorderRouter(array $options = [])
 * @method ReleaseEipAddress releaseEipAddress(array $options = [])
 * @method ReleaseIpv6InternetBandwidth releaseIpv6InternetBandwidth(array $options = [])
 * @method RemoveBandwidthPackageIps removeBandwidthPackageIps(array $options = [])
 * @method RemoveCommonBandwidthPackageIp removeCommonBandwidthPackageIp(array $options = [])
 * @method RemoveGlobalAccelerationInstanceIp removeGlobalAccelerationInstanceIp(array $options = [])
 * @method RemoveIPv6TranslatorAclListEntry removeIPv6TranslatorAclListEntry(array $options = [])
 * @method ReverseLogCollectionStatus reverseLogCollectionStatus(array $options = [])
 * @method SetLogCollectionAttribute setLogCollectionAttribute(array $options = [])
 * @method SetPublicIpTrafficAuditLogStatus setPublicIpTrafficAuditLogStatus(array $options = [])
 * @method SetTrafficAuditLogStatus setTrafficAuditLogStatus(array $options = [])
 * @method TerminatePhysicalConnection terminatePhysicalConnection(array $options = [])
 * @method TerminateVirtualBorderRouter terminateVirtualBorderRouter(array $options = [])
 * @method TestAction testAction(array $options = [])
 * @method TestCrmAction testCrmAction(array $options = [])
 * @method TestParam testParam(array $options = [])
 * @method UnassociateEipAddress unassociateEipAddress(array $options = [])
 * @method UnassociateGlobalAccelerationInstance unassociateGlobalAccelerationInstance(array $options = [])
 * @method UnassociateHaVip unassociateHaVip(array $options = [])
 * @method UnassociatePhysicalConnectionFromVirtualBorderRouter unassociatePhysicalConnectionFromVirtualBorderRouter(array $options = [])
 * @method UnassociateRouteTable unassociateRouteTable(array $options = [])
 */
class Vpc
{
    use ApiResolverTrait;
}
