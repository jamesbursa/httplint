httplint: httplint.c
	$(CC) -W -Wall `curl-config --cflags --libs` -O -o $@ $^

!HTTPlint/httplint,ff8: httplint.c
	/riscos/bin/gcc -W -Wall -I/riscos/include -L/riscos/lib -lcurl -lares -lz -lssl -lcrypto -O -o $@ $^

httplint.zip: !HTTPlint/httplint,ff8
	-rm $@
	/riscos/bin/zip -9vr, $@ !HTTPlint -x !HTTPlint/CVS/ !HTTPlint/CVS/*

