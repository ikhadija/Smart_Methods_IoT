
      let connect = false;
      let port;
      let writer;
      var target_id;
      const enc = new TextEncoder();

      async function onChangespeech() {
        if (!connect) {
          alert("must connect to the usb ..");
          return;
        }
       
        try {
          const commandlist = content;
          const commandSplit = commandlist.split(" ")
          const command = commandSplit.slice(-1);
          const computerText = `${command}@`;
          await writer.write(enc.encode(computerText));
        } catch (e) {
          console.log(e);
        }
      }
    
      

    async function onConnectUsb() {
      try {
        const requestOptions = {
          filters: [{ usbVendorId: 0x2341 }],
        };

        port = await navigator.serial.requestPort(requestOptions);
        await port.open({ baudRate: 115200 });
        writer = port.writable.getWriter();
        connect = true;
      } catch (e) {
        console.log("err", e);
      }
    }

    
  