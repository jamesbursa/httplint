httplint: httplint.c
	$(CC) -W -Wall `curl-config --cflags --libs` -O -o $@ $^

!HTTPlint/httplint,ff8: httplint.c
	/riscos/bin/gcc -W -Wall -I/riscos/include -L/riscos/lib -lcurl -lares -lz -lssl -lcrypto -O -o $@ $^

