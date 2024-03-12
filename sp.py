import pyshark

def print_packet_info(packet):
    # 检查数据包是否有IP层
    if 'IP' in packet:
        src_addr = packet.ip.src  # 源IP地址
        dst_addr = packet.ip.dst  # 目的IP地址
        # 打印基本信息
        print(f"Source IP: {src_addr}, Destination IP: {dst_addr}", end='')
    else:
        # 如果没有IP层，打印数据包的最顶层协议名称
        protocol = packet.layers[0]._layer_name.upper()
        print(f"Protocol: {protocol}", end='')

    # 如果是HTTP协议，并且能获取到域名，则打印域名
    if 'HTTP' in packet:
        try:
            if 'http.host' in packet.http.field_names:
                domain_name = packet.http.host
                print(f", Domain Name: {domain_name}", end='')
        except AttributeError:
            pass  # 如果无法获取域名则忽略

    print()  # 换行

def main():
    interface_name = "\\Device\\NPF_{E35FBF95-F2DA-441A-8F9A-FEE18CE1F42D}"
    # capture = pyshark.LiveCapture(interface=interface_name)
    capture = pyshark.LiveCapture(interface=interface_name, bpf_filter='tcp port 80')

    print("开始捕获...（按Ctrl+C停止）")
    capture.apply_on_packets(print_packet_info)

if __name__ == '__main__':
    main()
