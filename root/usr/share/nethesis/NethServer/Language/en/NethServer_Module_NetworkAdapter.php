<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'IP assignment';
$L['bootproto_none_label'] = 'Static';
$L['blue_label'] = 'Guests (blue)';
$L['device_label'] = 'Device';
$L['gateway_label'] = 'Gateway';
$L['green_label'] = 'LAN (green)';
$L['hwaddr_label'] = 'MAC address';
$L['ipaddr_label'] = 'IP address';
$L['orange_label'] = 'DMZ (orange)';
$L['Key_label'] = 'Device';
$L['netmask_label'] = 'Netmask';
$L['NetworkAdapter_Description'] = 'Change network settings';
$L['NetworkAdapter_Tags'] = 'network adapter ethernet networks';
$L['NetworkAdapter_Title'] = 'Network';
$L['red_label'] = 'Internet (red)';
$L['role_label'] = 'Role';
$L['update_header_label'] = 'Update device';
$L['interface-config_label'] = 'Interface configuration';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP can be used only with red interfaces";
$L['valid_platform,interface-config,interface-role,4'] = "Cannot delete the last green interface";
$L['No'] = 'No';
$L['Yes'] = 'Yes';
$L['type_alias_label'] = 'Alias';
$L['type_bridge_label'] = 'Bridge';
$L['type_bond_label'] = 'Bond';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configure IP assignment - ${0}';
$L['CreateLogicalInterface_label'] = 'New interface';
$L['CreateLogicalInterface_header'] = 'New logical interface';
$L['vlanTag_label'] = 'Tag';
$L['vlan_label'] = 'Interface';
$L['InterfaceType_label'] = 'Type';
$L['Next_label'] = 'Next';
$L['Back_label'] = 'Back';
$L['Edit_label'] = 'Edit';
$L['Edit_header'] = 'Edit ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Link status is \${link}\nSpeed \${speed} Mbit/s\nDriver \${driver}\nMac address \${mac}";
$L['Link_status_up'] = 'up';
$L['Link_status_down'] = 'down';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Speed ${0}';
$L['Confirm_header'] = 'Create ${role} interface ${device}';
$L['Action_create_bridge'] = 'Create a new bridge interface ${device} with ${parts}';
$L['Action_create_bond'] = 'Create a new ${bondMode} bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Create a new VLAN interface ${device} on ${parts}';
$L['Action_create_role'] = 'Set role to "${role}"';
$L['Action_set_static_ip'] = 'Set static IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obtain IP configuration from DHCP server';
$L['Action_use_gateway'] = 'Use gateway ${gateway}';
$L['Action_use_no_gateway'] = 'Do not set gateway';
$L['Create_label'] = 'Create interface';
$L['bridged_label'] = 'Bridged';
$L['slave_label'] = 'Slave';
$L['CreateIpAlias_header'] = 'Create IP alias "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Release ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Release role ${role} assigned to physical interface ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Remove ${device} from bond ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Remove ${device} from bridge ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Delete';
$L['DeleteLogicalInterface_header'] = 'Confirm deletion of ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Deleting bond interface \${device}.\nPick a successor from its slave interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_bridge_message'] = "Deleting bridge interface \${device}.\nPick a successor from the bridged interfaces to give it the current role and IP settings.";
$L['DeleteLogicalInterface_vlan_message'] = "Confirm deletion of VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirm deletion of alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Release role';
$L['Release_label'] = 'Release role';
$L['CleanPhysicalInterface_label'] = 'Delete';
$L['CreateIpAlias_label'] = 'Create IP alias';
$L['successor_label'] = 'Successor';
$L['NoSuccessor_label'] = 'None';
$L['bond_label'] = 'Bond';
$L['bridge_label'] = 'Bridge';
$L['alias_label'] = 'Alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Assign roles to physical interfaces';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Physical interfaces';
$L['CleanPhysicalInterface_header'] = 'Remove ${0}';
$L['Confirm device ${0} removal'] = 'Remove ${0} device from the database?';
$L['Clean_label'] = 'Remove';
$L['Refresh_label'] = 'Refresh link state';
$L['roleis_label'] = 'role';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'All roles are correctly assigned to network cards.';
$L['type_xdsl_label'] = 'PPPoE on ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'User name';
$L['PppoePassword_label'] = 'Password';
$L['PppoeInterface_label'] = 'Ethernet interface';
$L['PppoeProvider_label'] = 'Provider';
$L['pppoe_label'] = 'PPPoE (red)';
$L['SetPppoeParameters_label'] = 'Configure PPPoE';
$L['SetPppoeParameters_header'] = 'Configure PPPoE device ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Authentication type';
$L['AuthType_auto'] = 'Automatic';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Mode';
$L['BondMode_0_label'] = 'balance round robin';
$L['BondMode_1_label'] = 'active backup';
$L['BondMode_2_label'] = 'balance XOR';
$L['BondMode_3_label'] = 'broadcast';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balance TLB';
$L['BondMode_6_label'] = 'balance ALB';
$L['red_label'] = 'Internet (red)';
$L['multiwan_label'] = 'Multi WAN';
$L['Weight_label'] = 'Link weight';
$L['ProviderName_label'] = 'Link name';
$L['UpstreamProxy_label'] = 'Proxy settings';
